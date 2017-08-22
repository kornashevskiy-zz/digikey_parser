<?php

namespace ParserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $parser = $this->get('one.steam.parser');
        $parser->parse();
        return $this->render('ParserBundle:Default:index.html.twig');
    }

    /**
     * @Route("/test")
     */
    public function testAction()
    {
        $test = 0;
        print 'works';
        return $this->render('ParserBundle:Default:index.html.twig');
    }
}
