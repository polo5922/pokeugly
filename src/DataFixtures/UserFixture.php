<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
       foreach($this->userData() as $item){
            $user = new User();
            $user
                ->setUsername($item['pseudo'])
                ->setPassword($item['password'])
                ->setEmail($item['mail'])
                ->setRoles($item['rank'])
            ;

            $manager->persist($user);


        }

        $manager->flush();
    }

    private function userData() :array
    {

        return[
            [
                'pseudo' => 'polo',
                'mail' => 'paul.barbaux@gmail.com',
                'rank' => ["ROLE_USER"],
                'password' => '$argon2i$v=19$m=65536,t=4,p=1$TWFOUGhGMVBmMDg5SUU4cg$fR18J9vkazO/OVzltm7hEEs5ph9dZDdpWSqGEPJUkr0',
            ],
            [
                'pseudo' => 'admin',
                'mail' => 'admin@admin.com',
                'rank' => ["ROLE_ADMIN"],
                'password' => '$argon2i$v=19$m=65536,t=4,p=1$TFBaR245UUdEL09Ga3VCNw$Qwm6BUFC9XQ5KAlxEEplmZq7ZI2kYPEa3LASIVABh+o',
            ],
        ];
    }
}
