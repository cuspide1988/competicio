<?php

namespace Competition\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('CompetitionFrontendBundle:Page:index.html.twig');
    }
}
