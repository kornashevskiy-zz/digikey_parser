<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.08.17
 * Time: 12:17
 */

namespace ParserBundle\Service;


use ParserBundle\Service\AbstractClass\Connect;

class SingleConnect extends Connect
{
    /**
     * @param $url
     * @param int $i
     * @return string
     */
    public function connect($url, $i = 0)
    {
        $html = $this->checkHtml($url, $i);
        preg_match('#META NAME="ROBOTS"#', $html, $matches);
        preg_match('#500 Internal Server Error#', $html, $matches_1);
        preg_match('#502 Bad Gateway#', $html, $matches_2);

        if (!$html || isset($matches[0]) || isset($matches_1[0]) || isset($matches_2[0])) {
            $num = mt_rand(0, 10);
            return $this->connect($url, $num);
        }

        return $html;
    }

    /**
     * @param $url
     * @param $i
     * @return string
     */
    public function checkHtml($url, $i)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers['curl']);
        curl_setopt($ch, CURLOPT_URL, $url); // Куда отправляем

        foreach ($this->options as $key => $value) {
            curl_setopt($ch, $key, $value);
        }

        curl_setopt($ch, CURLOPT_PROXY, $this->proxy[$i]);
        curl_setopt($ch, CURLOPT_PROXYTYPE, $this->protocol[$i]);

        try {
            $html = curl_exec($ch);
        } catch (\Exception $e) {
            print $e->getMessage();
        }

        $info = curl_getinfo($ch);
        if ($info['http_code'] != 200 && $info['http_code'] != 404) {
            print 'failed connection ' . PHP_EOL;
            return false;
        }
        curl_close($ch);

        return $html;
    }

    public function guzzleConnect($url, $i = 0)
    {
        $protocol = $this->getProtocolForGuzzleConnect($i);

        $client = $this->guzzle->request('GET', $url, [
            'headers' => $this->headers['guzzle'],
            'proxy' => [
                $protocol => $this->proxy[$i]
            ],
            'timeout' => 60,
        ]);

        $body = $client->getBody()->getContents();

        if (!$body) {
            $num = mt_rand(0, 10);
            $this->guzzleConnect($num);
        }

        return $body;
    }
}