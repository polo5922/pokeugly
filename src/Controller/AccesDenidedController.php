<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccesDenidedController extends AbstractController
{
    /**
     * @Route("/acces_denided", name="acces_denided")
     */
    public function index()
    {
        return $this->render('acces_denided/index.html.twig', [
            'controller_name' => 'AccesDenidedController',
        ]);
    }
}
