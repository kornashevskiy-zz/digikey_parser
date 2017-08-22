<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.08.17
 * Time: 14:15
 */

namespace ParserBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SingleParserCommand extends ContainerAwareCommand
{
    public function configure()
    {
        $this->setName('app:single');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $test = 0;
        print 'start at: '. date('d : H:i') . "\n";
        $parser = $this->getContainer()->get('one.steam.parser');
        $parser->parse();
    }
}