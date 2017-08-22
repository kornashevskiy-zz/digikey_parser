<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.08.17
 * Time: 12:36
 */

namespace ParserBundle\Service;


use Doctrine\ORM\EntityManager;
use ParserBundle\Service\AbstractClass\Parser;

class OneSteamParser extends Parser
{
    public function __construct(EntityManager $manager)
    {
        parent::__construct($manager);
    }

    public function parse($url = false)
    {
        foreach ($this->urls as $url) {
            $categoryHtml = $this->singleConnect->guzzleConnect($url);
            $this->dataHandler->setCategoryName($categoryHtml);
            print 'parse category: '. $this->dataHandler->getCategoryName() . "\n";
            $subCategoryUrls = $this->dataHandler->getSubcategoryUrls($categoryHtml);

            foreach ($subCategoryUrls as $oneUrl) {
                $this->save($oneUrl);
            }
        }
        return;
    }
}