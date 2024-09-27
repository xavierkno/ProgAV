<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SauceController extends AbstractController
{
    #[Route('/sauce', name: 'app_sauce')]
    public function index(): Response
    {
        return $this->render('sauce/index.html.twig', [
            'controller_name' => 'SauceController',
        ]);
    }

    // #[Route('/sauce/create', method: 'POST', name: 'sauce_create')]
    // public function create(EntityManagerInterface $entityManager): Response
    // {
    //     $sauce = new sauce();
    //     $sauce->setName('Ketchup');

    //     // Persister et sauvegarder l'sauce
    //     $entityManager->persist($sauce);
    //     $entityManager->flush();
 
    //     return new Response('sauce créé avec succès !');
    // }
}
