<?php

namespace App\Controller;

use App\Repository\BurgerRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BurgerController extends AbstractController
{

    #[Route('/burgers', name: 'burgers')]
    public function liste(BurgerRepository $burgerRepository): Response
    {
        $burgers = $burgerRepository->findAll();

        return $this->render('burgers.html.twig',['burgers' => $burgers]);
    }

    #[Route('/burgers/{id}', name: 'detail', methods: ['GET', 'POST'])]
    public function show($id, BurgerRepository $burgerRepository): Response
    {
        $burger = $burgerRepository->find($id);

        // Vérifier si le burger existe
        if (!$burger) {
            // Si le burger n'existe pas, lancer une exception 404
            throw $this->createNotFoundException('Le burger avec l\'ID ' . $id . ' n\'existe pas.');
        }

        return $this->render('description.html.twig',['burger' => $burger]);
    }

    /*
    #[Route('/burger/create', method: 'POST', name: 'burger_create')]
    public function create(EntityManagerInterface $entityManager): Response
    {
        $burger = new burger();
        $burger->setName('classique');

        // Persister et sauvegarder l'burger
        $entityManager->persist($burger);
        $entityManager->flush();
 
        return new Response('burger créé avec succès !');
    }
    */
    
}

?>