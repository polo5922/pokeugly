<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\PokemonRepository;
use App\Repository\TeamRepository;

class PokedexController extends AbstractController
{

    public function index(PokemonRepository $pokemonRepository)
    {

        return $this->render('pokedex/index.html.twig', [
            
            'pokemons' => $pokemonRepository->findBy(
                array(),
                array('pokemon_id' => 'ASC')),
            'controller_name' => 'PokedexController',
        ]);
    }

    public function id($id,PokemonRepository $pokemonRepository,TeamRepository $TeamRepository)
    {

        return $this->render('pokedex/pokedex.html.twig', [
            'pokemons' => $pokemonRepository->findBy(array('pokemon_id' => $id)),
            'teams' => $TeamRepository->findBy(array('id' => $id)),
            'controller_name' => 'PokedexController',
        ]);
    }
}
