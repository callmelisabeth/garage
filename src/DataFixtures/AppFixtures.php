<?php

namespace App\DataFixtures;

use App\Entity\Cars;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       for($i = 1; $i < 10; $i++){
        $cars = new Cars();
        $cars->setBrand('Brand' . $i)
        ->setPrice(mt_rand(2000, 8000))
        ->setKilometers(mt_rand(100000,300000))
        ->setImage('image');
        $manager->persist($cars);
       }
        
        

        $manager->flush();
    }
}
