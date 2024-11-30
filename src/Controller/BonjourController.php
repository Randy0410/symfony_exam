<?php
// src/Controller/BonjourController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController
{

    #[Route('/welcome', name: 'welcome')]
    public function welcome(): Response
    {
        return new Response('Bienvenue dans symfonie!');
    }
}
