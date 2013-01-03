<?php

namespace Competition\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Competition\GameBundle\Form\GameType;
use Competition\GameBundle\Entity\Game;

class GameController extends Controller
{
    public function showSelectGameAction()
    {
        $form   = $this->createForm(new GameType());

        return $this->render('CompetitionGameBundle:Game:form.html.twig', array(
            'form'   => $form->createView()
        ));
    }

    public function redirectAction()
    {

        $request = $this->getRequest();
        $form = $this->createForm(new GameType());
        $form->bind($request);

        if ($form->isValid()) {
            $game = $form->get('slug')->getData();

            return $this->redirect($this->generateUrl('competition_frontend_homepage', array('_locale'=>$request->getLocale(), 'game_slug'=>$game->getSlug())));
        }

        return $this->render('CompetitionGameBundle:Game:form.html.twig', array(
            'form'    => $form->createView()
        ));
    }
}