<?php

namespace Competition\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction($game_slug)
    {
        $em = $this->getDoctrine()->getManager();
        if(!$game_slug) {
            $blogs = $em->getRepository('CompetitionBlogBundle:Blog')->getLatestBlogs();
        } else {
            $blogs = $em->getRepository('CompetitionBlogBundle:Blog')->getLatestBlogsBySlug($game_slug);
        }
        return $this->render('CompetitionFrontendBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }

    public function aboutAction()
    {
        return $this->render('CompetitionFrontendBundle:Page:about.html.twig');
    }

    public function sidebarAction()
    {
        $em = $this->getDoctrine()
            ->getManager();

        $tags = $em->getRepository('CompetitionBlogBundle:Blog')
            ->getTags();

        $tagWeights = $em->getRepository('CompetitionBlogBundle:Blog')
            ->getTagWeights($tags);

        $commentLimit   = $this->container
            ->getParameter('competition_blog.comments.latest_comment_limit');
        $latestComments = $em->getRepository('CompetitionBlogBundle:BlogComment')
            ->getLatestComments($commentLimit);

        return $this->render('CompetitionFrontendBundle:Page:sidebar.html.twig', array(
            'latestComments'    => $latestComments,
            'tags'              => $tagWeights
        ));
    }
}
