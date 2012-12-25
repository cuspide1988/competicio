<?php

namespace Competition\MatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CompetitionMatchBundle:Default:index.html.twig', array('name' => $name));
    }
}
