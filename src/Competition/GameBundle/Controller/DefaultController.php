<?php

namespace Competition\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CompetitionGameBundle:Default:index.html.twig', array('name' => $name));
    }
}
