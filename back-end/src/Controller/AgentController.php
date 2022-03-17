<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentController extends AbstractController
{
    /**
     * @Route("/agent", name="app_agent")
     */
    public function index(): Response
    {
        return $this->render('agent/index.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    /**
     * @Route("/agent", name="create_agent")
     */
    public function createAgent(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $agent = new Agent();
        $agent->setMatricule('97');
        $agent->setEmail('1999@gmail.com');
        $agent->setMotDePasse('1234');
        $agent->setIsActif(1);
        $agent->setRole('ADMIN');
        $agent->setIdService('1');
        $agent->setIdGrade('1');

        // tell Doctrine you want to (eventually) save the Agent (no queries yet)
        $entityManager->persist($agent);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new agent with id '.$agent->getId());
    }
}
