<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Cars;
use Faker\Core\DateTime;

class CarFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 10; $i++) {
            $cars = new Cars();
            $cars->setBrand('Renault')
                ->setPrice(mt_rand(2000, 8000))
                ->setKilometers(mt_rand(100000, 300000))
                ->setImage('http://via.placeholder.com/640x360');
            $manager->persist($cars);
        }

        $manager->flush();
    }
}
