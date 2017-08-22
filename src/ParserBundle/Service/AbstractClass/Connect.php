<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.08.17
 * Time: 12:08
 */

namespace ParserBundle\Service\AbstractClass;




use GuzzleHttp\Client;

abstract class Connect
{
    /**
     * @var Client
     */
    protected $guzzle;

    /**
     * @var array
     */
    protected $proxy = array(
        '93.91.112.185:80',
        '85.26.146.169:80',
        '93.90.220.11:880',
        '188.32.151.186:8081',
        '92.38.47.226:80',
        '207.154.238.46:8080',
        '109.167.153.201:1080',
        '83.166.96.47:8081',
        '62.33.245.138:1080',
        '46.150.172.128:1080',
        '188.32.79.247:8081',
    );

    /**
     * @var array
     */
    protected $protocol = array (
        CURLPROXY_HTTP,
        CURLPROXY_HTTP,
        CURLPROXY_HTTP,
        CURLPROXY_HTTP,
        CURLPROXY_HTTP,
        CURLPROXY_HTTP,
        CURLPROXY_SOCKS4,
        CURLPROXY_HTTP,
        CURLPROXY_SOCKS4,
        CURLPROXY_SOCKS4,
        CURLPROXY_HTTP,

    );

    /**
     * @var array
     */
    protected $headers = array(
        'curl' => [
            'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
            'Accept-Encoding: gzip, deflate8',
            'Cache-Control: max-age=0',
            'Connection: keep-alive',
            'Keep-Alive: 300',
            'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7',
            'Accept-Language: en-us,en;q=0.5'
        ],

        'guzzle' => [
            'Accept-Encoding' => 'gzip, deflate8',
            'Cache-Control' => 'max-age=0',
            'Connection' => 'keep-alive',
            'Keep-Alive' => 300,
            'Accept-Charset' => 'ISO-8859-1,utf-8;q=0.7,*;q=0.7',
            'Accept-Language' => 'en-us,en;q=0.5'
        ]
    );

    /**
     * @var array
     */
    protected $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "gzip, deflate",
        CURLOPT_USERAGENT => "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36",
        CURLOPT_AUTOREFERER => true,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_REFERER => 'http://eu.mouser.com',
    );

    /**
     * Connect constructor.
     */
    public function __construct()
    {
        $this->guzzle = new Client();
    }

    /**
     * @param int $i
     * @return string
     */
    public function getProtocolForGuzzleConnect($i = 0)
    {
        $protocol = '';

        switch ($this->protocol[$i]) {
            case CURLPROXY_HTTP:
                $protocol = 'http'; break;
            case CURLPROXY_SOCKS4:
                $protocol = 'socks4'; break;
            case CURLPROXY_SOCKS5:
                $protocol = 'socks5'; break;
        }

        return $protocol;
    }

    abstract public function connect($url, $i = 0);
    abstract public function guzzleConnect($url, $i = 0);
}