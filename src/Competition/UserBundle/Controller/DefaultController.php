<?php

namespace Competition\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CompetitionUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
