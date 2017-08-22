<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.08.17
 * Time: 13:01
 */

namespace ParserBundle\Service;


use ParserBundle\Service\AbstractClass\Parser;

class MultiSteamParser extends Parser
{
    public function parse($url)
    {
        $categoryHtml = $this->singleConnect->guzzleConnect($url);
        $this->dataHandler->setCategoryName($categoryHtml);
        print 'parse category: '. $this->dataHandler->getCategoryName();
        $subCategoryUrls = $this->dataHandler->getSubcategoryUrls($categoryHtml);

        foreach ($subCategoryUrls as $oneUrl) {
            $this->save($oneUrl);
        }
    }
}