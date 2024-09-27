<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ImageController extends AbstractController
{
    #[Route('/image', name: 'app_image')]
    public function index(): Response
    {
        return $this->render('image/index.html.twig', [
            'controller_name' => 'ImageController',
        ]);
    }

    
    // #[Route('/image/create', method: 'POST', name: 'image_create')]
    // public function create(EntityManagerInterface $entityManager): Response
    // {
    //     $image = new image();
    //     $image->setName('');

    //     // Persister et sauvegarder l'image
    //     $entityManager->persist($image);
    //     $entityManager->flush();
 
    //     return new Response('image créé avec succès !');
    // }
}
