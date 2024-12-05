<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        $this->addFlash('error', 'message de test !');
//        $this->addFlash('error', 'message de test !');
//        $this->addFlash('success', 'message de test !');
        
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
