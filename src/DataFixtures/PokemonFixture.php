<?php

namespace App\DataFixtures;

use App\Entity\Pokemon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;



class PokemonFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->pokemonData() as $item){
            $pokemon = new Pokemon();
            $pokemon
                ->setName($item['name'])
                ->setHp($item['hp'])
                ->setNature($item['nature'])
                ->setType($item['type'])
                ->setDescription($item['description'])
                ->setPokemonId($item['pokemon_id'])
                ->addAttaque($item['attack'])
            ;

            $manager->persist($pokemon);


        }

        $manager->flush();
    }

    private function pokemonData() :array
    {

        return[
            [
                'name' => 'Salamèche',
                'hp' => '50',
                'nature' => 'Timide',
                'type' => '13',
                'description' => "La flamme qui brûle au bout de sa queue indique l'humeur de ce Pokémon. Elle vacille lorsque Salamèche est content. En revanche, lorsqu'il s'énerve, la flamme prend de l'importance et brûle plus ardemment.",
                'pokemon_id' => '004',
                'attack' => $this->getReference('Flammèche'),
            ],
            [
                'name' => 'Reptincel',
                'hp' => '50',
                'nature' => 'Timide',
                'type' => '13',
                'description' => "Reptincel lacère ses ennemis sans pitié grâce à ses griffes acérées. S'il rencontre un ennemi puissant, il devient agressif et la flamme au bout de sa queue s'embrase et prend une couleur bleu clair.",
                'pokemon_id' => '005',
                'attack' => $this->getReference('Flammèche'),
            ],
            [
                'name' => 'Dracaufeu',
                'hp' => '50',
                'nature' => 'Timide',
                'type' => '13',
                'description' => "Dracaufeu parcourt les cieux pour trouver des adversaires à sa mesure. Il crache de puissantes flammes capables de faire fondre n'importe quoi. Mais il ne dirige jamais son souffle destructeur vers un ennemi plus faible.",
                'pokemon_id' => '006',
                'attack' => $this->getReference('Flammèche'),
            ],
            [
                'name' => 'Carapuce',
                'hp' => '50',
                'nature' => 'Jovial',
                'type' => '15',
                'pokemon_id' => '007',
                'description' => "La carapace de Carapuce ne sert pas qu'à le protéger. La forme ronde de sa carapace et ses rainures lui permettent d'améliorer son hydrodynamisme. Ce Pokémon nage extrêmement vite.",
                'attack' => $this->getReference('Pistolet à O'),
            ],
            [
                'name' => 'Carabaffe',
                'hp' => '50',
                'nature' => 'Jovial',
                'type' => '15',
                'pokemon_id' => '008',
                'description' => "Carabaffe a une large queue recouverte d'une épaisse fourrure. Elle devient de plus en plus foncée avec l'âge. Les éraflures sur la carapace de ce Pokémon témoignent de son expérience aux combats.",
                'attack' => $this->getReference('Pistolet à O'),
            ],
            [
                'name' => 'Tortank',
                'hp' => '50',
                'nature' => 'Jovial',
                'type' => '15',
                'pokemon_id' => '009',
                'description' => "Tortank dispose de canons à eau émergeant de sa carapace. Ils sont très précis et peuvent envoyer des balles d'eau capables de faire mouche sur une cible située à plus de 50 m.",
                'attack' => $this->getReference('Pistolet à O'),
            ],
            [
                'name' => 'Bulbizarre',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '8',
                'pokemon_id' => '001',
                'description' => 'Bulbizarre passe son temps à faire la sieste sous le soleil. Il y a une graine sur son dos. Il absorbe les rayons du soleil pour faire doucement pousser la graine.',
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Herbizarre',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '8',
                'pokemon_id' => '002',
                'description' => "Un bourgeon a poussé sur le dos de ce Pokémon. Pour en supporter le poids, Herbizarre a dû se muscler les pattes. Lorsqu'il commence à se prélasser au soleil, ça signifie que son bourgeon va éclore, donnant naissance à une fleur.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Florizarre',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '8',
                'pokemon_id' => '003',
                'description' => "Une belle fleur se trouve sur le dos de Florizarre. Elle prend une couleur vive lorsqu'elle est bien nourrie et bien ensoleillée. Le parfum de cette fleur peut apaiser les gens.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Chenipan',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '10',
                'pokemon_id' => '010',
                'description' => "Chenipan a un appétit d'ogre. Il peut engloutir des feuilles plus grosses que lui. Les antennes de ce Pokémon dégagent une odeur particulièrement entêtante.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Chrysacier',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '10',
                'pokemon_id' => '011',
                'description' => "La carapace protégeant ce Pokémon est dure comme du métal. Chrysacier ne bouge pas beaucoup. Il reste immobile pour préparer les organes à l'intérieur de sa carapace en vue d'une évolution future.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Papilusion',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '10',
                'pokemon_id' => '012',
                'description' => "Papilusion est très doué pour repérer le délicieux nectar qu'il butine dans les fleurs. Il peut détecter, extraire et transporter le nectar de fleurs situées à plus de 10 km de son nid.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Aspicot',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '10',
                'pokemon_id' => '013',
                'description' => "L'odorat d'Aspicot est extrêmement développé. Il lui suffit de renifler ses feuilles préférées avec son gros appendice nasal pour les reconnaître entre mille.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Coconfort',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '10',
                'pokemon_id' => '014',
                'description' => "Coconfort est la plupart du temps immobile et reste accroché à un arbre. Cependant, intérieurement, il est très actif, car il se prépare pour sa prochaine évolution. En touchant sa carapace, on peut sentir sa chaleur.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Dardargnan',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '10',
                'pokemon_id' => '015',
                'description' => "Dardargnan est extrêmement possessif. Il vaut mieux ne pas toucher à son nid si on veut éviter d'avoir des ennuis. Lorsqu'ils sont en colère, ces Pokémon attaquent en masse.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Roucool',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '9',
                'pokemon_id' => '016',
                'description' => "Roucool a un excellent sens de l'orientation. Il est capable de retrouver son nid sans jamais se tromper, même s'il est très loin de chez lui et dans un environnement qu'il ne connaît pas.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Roucoups',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '9',
                'pokemon_id' => '017',
                'description' => "Roucoups utilise une vaste surface pour son territoire. Ce Pokémon surveille régulièrement son espace aérien. Si quelqu'un pénètre sur son territoire, il corrige l'ennemi sans pitié d'un coup de ses terribles serres.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Roucarnage',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '1',
                'pokemon_id' => '018',
                'description' => "Ce Pokémon est doté d'un plumage magnifique et luisant. Bien des Dresseurs sont captivés par la beauté fatale de sa huppe et décident de choisir Roucarnage comme leur Pokémon favori.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Rattata',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '9',
                'pokemon_id' => '019',
                'description' => "Rattata est extrêmement prudent. Même lorsqu'il est endormi, il fait pivoter ses oreilles pour écouter autour de lui. En ce qui concerne son habitat, il n'est vraiment pas difficile. Il peut faire son nid n'importe où.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Rattatac',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '9',
                'pokemon_id' => '020',
                'description' => "Les crocs robustes de Rattatac poussent constamment. Pour éviter qu'ils raclent le sol, il se fait les dents sur des cailloux ou des troncs d'arbre. Il lui arrive même de ronger les murs des maisons.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Piafabec',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '9',
                'pokemon_id' => '021',
                'description' => "Piafabec crie tellement fort qu'il peut être entendu à 1km de distance. Ces Pokémon se préviennent d'un danger en entonnant une mélopée très aiguë, qu'ils se renvoient les uns les autres, comme un écho.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Rapasdepic',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '1',
                'pokemon_id' => '022',
                'description' => "On reconnaît un Rapasdepic à son long cou et à son bec allongé. Ces attributs lui permettent d'attraper facilement ses proies dans la terre ou dans l'eau. Il bouge son bec long et fin avec une grande agilité.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Abo',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '7',
                'pokemon_id' => '023',
                'description' => "Abo s'enroule en spirale pour dormir. Sa tête reste relevée de telle sorte que cette position lui permette de réagir rapidement si une menace survenait.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],
            [
                'name' => 'Arbok',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '7',
                'pokemon_id' => '024',
                'description' => "Ce Pokémon doté d'une force extraordinaire peut étrangler ses proies avec son corps. Il peut même écraser des tonneaux métalliques. Une fois sous l'étreinte d'Arbok, il est impossible de lui échapper.",
                'attack' => $this->getReference('Fouet-lianes'),
            ],

        ];
    }
}
