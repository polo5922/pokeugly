<?php

namespace App\DataFixtures;

use App\Entity\Potion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class PotionFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->potionData() as $item){
            $potion = new Potion();
            $potion
                ->setName($item['name'])
                ->setPower($item['power'])
                ->setDescription($item['description'])
            ;

            $manager->persist($potion);


        }

        $manager->flush();
    }

    private function potionData() :array
    {

        return[
            [
                'name' => 'potion',
                'power' => '1',
                'description' => 'Lorem Ipsum',

            ],
            [
                'name' => 'super potion',
                'power' => '2',
                'description' => 'Lorem Ipsum',

            ]

        ];
    }
}