<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CommentaireController extends AbstractController
{
    #[Route('/commentaire', name: 'app_commentaire')]
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'controller_name' => 'CommentaireController',
        ]);
    }

    // #[Route('/commentaire/create', method: 'POST', name: 'commentaire_create')]
    // public function create(EntityManagerInterface $entityManager): Response
    // {
    //     $commentaire = new commentaire();
    //     $commentaire->setName('super burger, puis je avoir la recette ?');

    //     // Persister et sauvegarder l'commentaire
    //     $entityManager->persist($commentaire);
    //     $entityManager->flush();
 
    //     return new Response('commentaire créé avec succès !');
    // }
}
