<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.08.17
 * Time: 12:26
 */

namespace ParserBundle\Service;


use GuzzleHttp\Client;
use ParserBundle\Service\AbstractClass\Connect;
use GuzzleHttp\Promise;

class MultiConnect extends Connect
{
    private $pages = [];

    private $result;

    public function connect($arrayUrls, $i = 0)
    {
        $this->pages = [];
        $multi = curl_multi_init();
        $handles = [];

        foreach ($arrayUrls as $url) {
            $handles[] = $this->getChForMultiCurl($url, $multi);
        }

        do {
            $mrc = curl_multi_exec($multi, $active);
        } while ($mrc == CURLM_CALL_MULTI_PERFORM);

        while ($active && $mrc == CURLM_OK) {
            if (curl_multi_select($multi) != -1) {
                do {
                    $mrc = curl_multi_exec($multi, $active);
                } while ($mrc == CURLM_CALL_MULTI_PERFORM);
            }
        }

        foreach ($handles as $channel) {
            $page = curl_multi_getcontent($channel);
            $result = $this->checkingPage($page, $arrayUrls);

            if (is_array($result)) {
                curl_multi_close($multi);
                $this->result = null;
                $this->pages = [];
                return $result;
            } else {
                $this->pages[] = $page;
                curl_multi_remove_handle($multi, $channel);
            }

        }

        curl_multi_close($multi);

        return $this->pages;
    }

    public function checkingPage($page, $arrayUrls)
    {
        preg_match('#META NAME="ROBOTS"#', $page, $matches);
        preg_match('#500 Internal Server Error#', $page, $matches_1);
        preg_match('#502 Bad Gateway#', $page, $matches_2);

        if (isset($matches[0]) || isset($matches_1[0]) || isset($matches_2[0]) || $page == '') {
            $multi = curl_multi_init();
            $handles = [];
            $num = mt_rand(0, 10);
            foreach ($arrayUrls as $url) {
                $handles[] = $this->getChForMultiCurl($url, $multi, $num);
            }

            do {
                $mrc = curl_multi_exec($multi, $active);
            } while ($mrc == CURLM_CALL_MULTI_PERFORM);

            while ($active && $mrc == CURLM_OK) {
                if (curl_multi_select($multi) != -1) {
                    do {
                        $mrc = curl_multi_exec($multi, $active);
                    } while ($mrc == CURLM_CALL_MULTI_PERFORM);
                }
            }

            foreach ($handles as $channel) {
                $this->pages[] = curl_multi_getcontent($channel);
                curl_multi_remove_handle($multi, $channel);
            }

            curl_multi_close($multi);

            foreach ($this->pages as $onePage) {
                if (is_array($this->result))
                {
                    break;
                }
                preg_match('#META NAME="ROBOTS"#', $onePage, $matches);
                preg_match('#500 Internal Server Error#', $page, $matches_1);
                preg_match('#502 Bad Gateway#', $page, $matches_1);

                if (isset($matches[0]) || isset($matches_1[0]) || isset($matches_2[0]) || $onePage == '') {
                    $this->pages = [];
                    $this->checkingPage($onePage, $arrayUrls);
                }
            }

            $this->result = $this->pages;
            return $this->result;
        } else {
            return $page;
        }
    }

    private function getChForMultiCurl($url, $multiCurl, $i = 0)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers['curl']);
        curl_setopt($ch, CURLOPT_URL, $url);

        foreach ($this->options as $key => $value) {
            curl_setopt($ch, $key, $value);
        }

        curl_setopt($ch, CURLOPT_PROXY, $this->proxy[$i]);
        curl_setopt($ch, CURLOPT_PROXYTYPE, $this->protocol[$i]);

        curl_multi_add_handle($multiCurl, $ch);

        return $ch;
    }

    /**
     * @param $arrayUrls
     * @param int $i
     * @return array
     */
    public function guzzleConnect($arrayUrls, $i = 0)
    {
        $protocol = $this->getProtocolForGuzzleConnect($i);

        $client = new Client([
            'headers' => $this->headers['guzzle'],
            'proxy' => [
                $protocol => $this->proxy[$i]
            ],
            'timeout' => 60,
        ]);

        $requestPromises = [];

        foreach ($arrayUrls as $url) {
            $requestPromises[] = $client->getAsync($url);
        }

        $results = Promise\settle($requestPromises)->wait();

        $html = [];

        foreach ($results as $result) {
            foreach ($result as $domain => $obj) {

                if ($result['state'] === 'fulfilled') {

                    $response = $result['value'];

                    if ($response->getStatusCode() == 200) {
                        $html[] = $response->getBody()->getContents();
                    } else {
                        $html[] = $response->getStatusCode();
                    }
                } else if ($result['state'] === 'rejected') {
                    // notice that if call fails guzzle returns is as state rejected with a reason.

                    $html[] = 'ERR: ' . $result['reason'];
                } else {
                    $html[] = 'ERR: unknown exception ';
                }
            }
        }


        return $html;
    }
}