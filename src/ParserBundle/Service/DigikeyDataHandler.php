<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.08.17
 * Time: 10:51
 */

namespace ParserBundle\Service;


use Symfony\Component\DomCrawler\Crawler;

class DigikeyDataHandler
{
    private $url = 'https://www.digikey.com';

    private $mainCategorySelector = '#mainContentSelector > h1';

    private $subCategorySelector = '.connectorFamilyList';

    private $tableContentSelector = '#lnkPart tr';

    private $tableHeaderSelector = '#productTable th';

    private $categoryName;

    private $subcategoryName;

    private $headers;

    private $content;

    public function getSubcategoryUrls($html)
    {
        $crawler = new Crawler($html);

        $arrayUrls = $crawler->filter($this->subCategorySelector)->each(function (Crawler $div, $i) {
            $urls = null;
            if ($i <= 1) {
                $html = $div->html();
                $crawler = new Crawler($html);
                $urls = $crawler->filter('li a')->each(function (Crawler $a) {
                    return $this->url . $a->attr('href');
                });
            }
            return $urls;
        });

        $result = [];

        foreach ($arrayUrls as $urls) {
            if ($urls != null) {
                foreach ($urls as $url) {
                    $result[] = $url;
                }
            }
        }

        return $result;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @return mixed
     */
    public function getSubcategoryName()
    {
        return $this->subcategoryName;
    }


    public function setCategoryName($html)
    {
        $crawler = new Crawler($html);

        $this->categoryName = $this->checkNode($this->mainCategorySelector, 'text', $crawler);
    }

    public function setSubCategoryName($html)
    {
        $crawler = new Crawler($html);
        $str = trim(str_replace("\r\n", '',$crawler->filter('h1.breadcrumbs')->text()));

        preg_match('/(- \w+.*)/', $str, $matches);
        $pos = strrpos($str, '>') + 1;

        $str_1 = trim(substr($str, $pos));


        if (isset($matches[0])) {
            $count = count($matches) - 1;
            $this->subcategoryName = trim(str_replace(['-', '>'], '', $matches[$count]));

            return;
        } elseif ($str_1) {
            $this->subcategoryName = $str_1;
        }else {
            throw new \Exception('error to set subCategoryName');
        }
    }

    /**
     * @param $selector
     * @param $attr
     * @param Crawler $tr
     * @return string
     */
    public function checkNode($selector, $attr, Crawler $tr)
    {
        $node = $tr->filter($selector);

        if ($node->getNode(0) != null) {
            if ($attr == 'text') {
                $array = array("\r", "\n", "\t");
                return trim(str_replace($array, '', $node->text()));
            } else {
                return trim($node->attr($attr));
            }
        } else {
            return '';
        }
    }

    public function tableHeader($html)
    {
        $this->headers = [];
        $crawler = new Crawler($html);

        $headers = $crawler->filter($this->tableHeaderSelector)->each(function (Crawler $th, $i) {
            if ($i > 0) {

                if ($i == 1) {
                    return 'Pdf';
                }
                $text = trim(str_replace(array("\n", "\t", "\r", '(', ')', '/', '-', '_', ','), '', $th->text()));
                return trim($this->headerHandler($text));
            }
        });

        $result = [];
        foreach ($headers as $value) {
            if ($value !== '' && $value !== null) {
                $result[] = $value;
            }
        }
        $this->headers = $result;

        return;
    }

    private function headerHandler($str)
    {
        $arrayStr = explode(' ', $str);
        $result = '';

        if (is_array($arrayStr)) {
            foreach ($arrayStr as $value) {
                $result .= ucfirst($value);
            }

            return $result;
        }

        return ucfirst($str);;
    }

    public function getContent($arrayHtml, $a)
    {
        $this->content = [];
        for ($i = 0; $i < count($arrayHtml); $i++) {
            if ($i == 0) {
                $this->tableHeader($arrayHtml[$i]);
            }
            $crawler = new Crawler($arrayHtml[$i]);
            $content = [];
            $result = $crawler->filter($this->tableContentSelector);

            if ($result->getNode(0) != null) {
                $result->each(function (Crawler $tr) use ($content) {
                    $content[] = $this->checkNode('td:nth-child(2) a', 'href', $tr);
                    $content[] = 'http:'.$this->checkNode('td:nth-child(3) img', 'src', $tr);
                    $content[] = $this->checkNode('td:nth-child(4) > a', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(5) a', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(6) a', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(7)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(8)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(9)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(10)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(11)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(12) a', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(13)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(14)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(15)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(16)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(17)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(18)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(19)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(20)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(21)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(22)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(23)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(24)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(25)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(26)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(27)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(28)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(29)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(30)', 'text', $tr);
                    $content[] = $this->checkNode('td:nth-child(31)', 'text', $tr);

                    $this->content[] = $content;
                });
            } else {
                $from = $a * 10;
                $to = $from + 10;
                print $arrayHtml[$i]."\n stopped on page-".$i."; pages: ".$from.'-'.$to;
                return false;
            }


        }

        return true;
    }


    public function arrayMerge()
    {
        $result = [];
        $data = count($this->content[0]);
        $header = count($this->headers);

        foreach ($this->content as $content) {
            if ($data > $header) {
                $arrayContent = array_slice($content, 0, $header);
                $result[] = array_combine($this->headers, $arrayContent);
            } elseif ($data < $header) {
                $arrayHeaders = $this->arrayFill($this->headers, $content);
                $result[] = array_combine($arrayHeaders, $content);
            }
        }



        return $result;
    }

    /**
     * @param $dbRows
     * @param $data
     * @return array
     */
    public function arrayFill($dbRows, $data)
    {
        $i = count($dbRows) - count($data);

        for ($a = 1; $a <= $i; $a++) {
            $data[] = '-';
        }
        return $data;
    }

    public function checkArrayOnVoid($arrayHtml)
    {
        $result = [];

        foreach ($arrayHtml as $html) {
            if ($html !== '' && $html != null) {
                $result[] = $html;
            }
        }

        return $result;
    }
}