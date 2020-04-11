<?php

namespace App\DataFixtures;

use App\Entity\Attaque;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AttaqueFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->attaqueData() as $item){
            $attaque = new Attaque();
            $attaque
                ->setName($item['name'])
                ->setPower($item['power'])
                ->setType($item['type'])
                ->setDescription($item['description'])
            ;

            $manager->persist($attaque);
            $this->addReference($item['name'], $attaque);

        }

        $manager->flush();
    }

    private function attaqueData() :array
    {

        return[
            [
                'name' => 'Flammèche',
                'power' => '50',
                'type' => '1',
                'description' => 'Lorem Ipsum',
            ],
            [
                'name' => 'Pistolet à O',
                'power' => '50',
                'type' => '2',
                'description' => 'Lorem Ipsum',
            ],
            [
                'name' => 'Fouet-lianes',
                'power' => '50',
                'type' => '3',
                'description' => 'Lorem Ipsum',
            ],

        ];
    }
}