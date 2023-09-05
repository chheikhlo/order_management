<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use EsperoSoft\Faker\Faker;
use APP\Entity\Order;

class OrderFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        
        //pour generer des données
        $faker = new Faker();

        $orders = [];
        //données generer pour commandes
        for($i = 0; $i < 100; $i++) { 
            $order = (new Order()) -> setReference($faker -> postcode())
                                   -> setCreatedAt($faker -> dateTimeImmutable());

            $orders[] = $order;
            $manager->persist($order);
        }

        //push en base de donnée
        $manager->flush();

        // en ligne de commande : php bin/console d:f:l
    }
}
