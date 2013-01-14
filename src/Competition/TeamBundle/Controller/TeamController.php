<?php

namespace Competition\TeamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Competition\TeamBundle\Entity\Team;
use Competition\TeamBundle\Form\TeamType;

class TeamController extends Controller
{
    public function newAction()
    {
        $team = new Team();
        $form   = $this->createForm(new TeamType(), $team);

        return $this->render('CompetitionTeamBundle:Team:new.html.twig', array(
            'team' => $team,
            'form'   => $form->createView()
        ));
    }

    public function createAction()
    {
        $team  = new Team();
        $request = $this->getRequest();
        $form    = $this->createForm(new TeamType(), $team);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($team);
            $em->flush();

            return $this->redirect($this->generateUrl('competition_team_show', array(
                    'id'    => $team->getId()))
            );
        }

        return $this->render('CompetitionTeamBundle:Team:create.html.twig', array(
            'team' => $team,
            'form'    => $form->createView()
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $team = $em->getRepository('CompetitionTeamBundle:Team')->find($id);

        if (!$team) {
            throw $this->createNotFoundException('Unable to find Team.');
        }

        return $this->render('CompetitionTeamBundle:Team:show.html.twig', array(
            'team'      => $team
        ));
    }
}
