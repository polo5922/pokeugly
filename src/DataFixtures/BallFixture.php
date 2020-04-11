<?php

namespace App\DataFixtures;

use App\Entity\Ball;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class BallFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->ballData() as $item){
            $ball = new Ball();
            $ball
                ->setName($item['name'])
                ->setDescription($item['description'])
            ;

            $manager->persist($ball);


        }

        $manager->flush();
    }

    private function ballData() :array
    {

        return[
            [
                'name' => 'pokeball',
                'description' => 'Lorem Ipsum',

            ],
            [
                'name' => 'superball',
                'description' => 'Lorem Ipsum',

            ]

        ];
    }
}