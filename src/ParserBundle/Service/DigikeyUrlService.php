<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.08.17
 * Time: 11:10
 */

namespace ParserBundle\Service;


class DigikeyUrlService
{
    private $prefix = '/page/';

    public function pageUrl($url, $i = 1)
    {
        return $url . $this->prefix . $i;
    }

    public function tenPagesUrl($url)
    {
        $urls = [];
        $i = 1;

        while ($i <= 10) {
            $urls[] = $this->pageUrl($url, $i);
            $i++;
        }

        return $urls;
    }
}