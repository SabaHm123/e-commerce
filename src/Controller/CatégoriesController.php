<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatégoriesController extends AbstractController
{
    #[Route('/cat/gories', name: 'cat_gories')]
    public function index(): Response
    {
        return $this->render('catégories/index.html.twig', [
            'controller_name' => 'CatégoriesController',
        ]);
    }
}
