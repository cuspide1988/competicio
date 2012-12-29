<?php

namespace Competition\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    /**
     * Show a blog entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('CompetitionBlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        $comments = $em->getRepository('CompetitionBlogBundle:BlogComment')->getCommentsForBlog($id, true);

        return $this->render('CompetitionBlogBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
            'comments'  => $comments,
        ));
    }
}
