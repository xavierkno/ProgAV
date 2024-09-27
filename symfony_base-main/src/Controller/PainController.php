<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PainController extends AbstractController
{
    #[Route('/pain', name: 'app_pain')]
    public function index(): Response
    {
        return $this->render('pain/index.html.twig', [
            'controller_name' => 'PainController',
        ]);
    }

    // #[Route('/pain/create', method: 'POST', name: 'pain_create')]
    // public function create(EntityManagerInterface $entityManager): Response
    // {
    //     $pain = new pain();
    //     $pain->setName('brioché');

    //     // Persister et sauvegarder l'pain
    //     $entityManager->persist($pain);
    //     $entityManager->flush();
 
    //     return new Response('pain créé avec succès !');
    // }
}
