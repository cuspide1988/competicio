<?php

namespace Competition\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $blogs = $em->getRepository('CompetitionBlogBundle:Blog')->getLatestBlogs();

        return $this->render('CompetitionFrontendBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }

    public function aboutAction()
    {
        return $this->render('CompetitionFrontendBundle:Page:about.html.twig');
    }
}
