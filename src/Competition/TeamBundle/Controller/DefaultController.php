<?php

namespace Competition\TeamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CompetitionTeamBundle:Default:index.html.twig', array('name' => $name));
    }
}
