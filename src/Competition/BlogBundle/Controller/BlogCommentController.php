<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 30/12/12
 * Time: 12:43
 */
namespace Competition\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Competition\BlogBundle\Entity\BlogComment;
use Competition\BlogBundle\Form\BlogCommentType;

/**
 * Comment controller.
 */
class BlogCommentController extends Controller
{
    public function newAction($blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $comment = new BlogComment();
        $comment->setBlog($blog);
        $form   = $this->createForm(new BlogCommentType(), $comment);

        return $this->render('CompetitionBlogBundle:BlogComment:form.html.twig', array(
            'comment' => $comment,
            'form'   => $form->createView()
        ));
    }

    public function createAction($blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $comment  = new BlogComment();
        $comment->setBlog($blog);
        $request = $this->getRequest();
        $form    = $this->createForm(new BlogCommentType(), $comment);
        $form->bind($request);

        if ($form->isValid()) {
            // Persist the comment entity
            if ($form->isValid()) {
                $em = $this->getDoctrine()
                    ->getManager();
                $em->persist($comment);
                $em->flush();

                return $this->redirect($this->generateUrl('competition_blog_show', array(
                        'id' => $comment->getBlog()->getId())) .
                        '#comment-' . $comment->getId()
                );
            }

            return $this->redirect($this->generateUrl('competition_blog_show', array(
                    'id' => $comment->getBlog()->getId())) .
                    '#comment-' . $comment->getId()
            );
        }

        return $this->render('CompetitionBlogBundle:BlogComment:create.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView()
        ));
    }

    protected function getBlog($blog_id)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $blog = $em->getRepository('CompetitionBlogBundle:Blog')->find($blog_id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $blog;
    }

}
