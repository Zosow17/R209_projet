<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OsowController extends AbstractController
{
    #[Route('/osow', name: 'app_osow')]
    public function index(): Response
    {
        return $this->render('osow/index.html.twig', [
            'controller_name' => 'OsowController',
        ]);
    }
}
