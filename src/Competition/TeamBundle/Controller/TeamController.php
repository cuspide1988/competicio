<?php

namespace Competition\TeamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Competition\TeamBundle\Entity\Team;
use Competition\TeamBundle\Entity\TeamMember;
use Competition\TeamBundle\Form\TeamType;

class TeamController extends Controller
{
    public function createAction()
    {
        $team  = new Team();
        $request = $this->getRequest();

        $form = $this->createFormBuilder($team)
            ->add('name')
            ->add('tag')
            ->add('web', null, array('required' => false))
            ->add('description', null, array('required' => false))
            ->add('avatar', null, array('required' => false))
            ->getForm();

        if ($request->isMethod('POST')) {

            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()
                    ->getManager();
                $em->persist($team);
                $em->flush();

                $teamMember = new TeamMember();
                $teamMember->setUser($this->getUser());
                $teamMember->setAccepted(true);
                $teamMember->setTeam($team);
                $em->persist($teamMember);
                $em->flush();

                return $this->redirect($this->generateUrl('competition_team_show', array(
                        'id'    => $team->getId()))
                );
            }
        }

        return $this->render('CompetitionTeamBundle:Team:create.html.twig', array(
            'team' => $team,
            'form' => $form->createView()
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
