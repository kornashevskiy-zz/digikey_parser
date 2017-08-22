<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.08.17
 * Time: 11:32
 */

namespace ParserBundle\Service\AbstractClass;


use Doctrine\ORM\EntityManager;
use ParserBundle\Entity\Digikey;
use ParserBundle\Service\DigikeyDataHandler;
use ParserBundle\Service\DigikeyUrlService;
use ParserBundle\Service\MultiConnect;
use ParserBundle\Service\SingleConnect;
use Symfony\Component\Console\Output\OutputInterface;

abstract class Parser
{
    protected $urls = [
        'https://www.digikey.com/en/resources/connectors/circular-connectors',
        'https://www.digikey.com/en/resources/connectors/terminal-blocks',
        'https://www.digikey.com/en/resources/connectors/coaxial-rf-connectors',
        'https://www.digikey.com/en/resources/connectors/d-sub-d-shaped-connectors',
        'https://www.digikey.com/en/resources/connectors/usb-dvi-hdmi-connectors',
        'https://www.digikey.com/en/resources/connectors/terminals',
        'https://www.digikey.com/en/resources/connectors/power-entry',
        'https://www.digikey.com/en/resources/connectors/rectangular-connectors'
    ];

    /**
     * @var array
     */
    protected $path = [
        'image' => __DIR__.'/../../../web/image/',
        'pdf' => __DIR__.'/../../../web/lib/pdf/',
        'test' => __DIR__.'/../../../web/lib/test/'
    ];

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var DigikeyUrlService
     */
    protected $urlService;

    /**
     * @var MultiConnect
     */
    protected $multiConnect;

    /**
     * @var SingleConnect
     */
    protected $singleConnect;

    /**
     * @var DigikeyDataHandler
     */
    protected $dataHandler;

    /**
     * @var OutputInterface
     */
    protected $output;

    /**
     * Parser constructor.
     * @param EntityManager $manager
     */
    public function __construct(EntityManager $manager)
    {
        $this->em = $manager;
        $this->urlService = new DigikeyUrlService();
        $this->dataHandler = new DigikeyDataHandler();
        $this->singleConnect = new SingleConnect();
        $this->multiConnect = new MultiConnect();
    }

    /**
     * @return array
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @param mixed $output
     */
    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function save($url)
    {
        try{
            $result = true;
            $i = 0;
            $a = 10;
            while ($result) {
                $tenPagesUrl = $this->urlService->tenPagesUrl($url);
                $arrayHtml = $this->multiConnect->guzzleConnect($tenPagesUrl);
                $arrayHtml = $this->dataHandler->checkArrayOnVoid($arrayHtml);

                if ($i == 0) {
                    $this->dataHandler->setSubCategoryName($arrayHtml[0]);
                    print 'subcategory name: '.$this->dataHandler->getSubcategoryName();
                }

                $result = $this->dataHandler->getContent($arrayHtml, $i);

                $content = $this->dataHandler->arrayMerge();

                foreach (array_chunk($content, 25) as $array) {
                    $this->saveDataToDb($array);
                    $this->em->flush();
                    $this->em->clear();
                }


                $from = $i * $a;
                $to = $from + $a;
                print "save content from pages: ".$from.'-'.$to . "\n";

                $result = false; //for testing

                $i++;
            }

        } catch (\Exception $e) {
            print $e->getMessage();
            exit;
        }
    }

    public function saveDataToDb(array $data)
    {

        foreach ($data as $array) {
            $db = new Digikey();
            $db->setTableHeaders(serialize($this->dataHandler->getHeaders()));
            $db->setCategory($this->dataHandler->getCategoryName());
            $db->setSubCategory($this->dataHandler->getSubcategoryName());
            foreach ($array as $key => $value) {
                $db->{'set' . $key}($value);
            }
            $this->em->persist($db);
        }
        return $db;
    }

    abstract public function parse($url);

}