<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.08.17
 * Time: 15:04
 */

namespace ParserBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MultiParserCommand extends ContainerAwareCommand
{
    public function configure()
    {
        $this->setName('app:multiParser');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $parser = $this->getContainer()->get('multi.steam.parser');

        foreach ($parser->getUrls() as $url) {

        }
    }
}