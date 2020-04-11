<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\PokemonRepository;

class PokemonController extends AbstractController
{

    public function index(PokemonRepository $pokemonRepository)
    {
        return $this->render('pokemon/index.html.twig', [
            'pokemons' => $pokemonRepository->findAll(),
            'controller_name' => 'PokemonController',
        ]);
    }

    public function getId($id)
    {

        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
        ]);
    }
}
