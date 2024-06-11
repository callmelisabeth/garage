<?php

namespace App\DataFixtures;

use App\Entity\OpeningHours;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use DateTime;


class OpeningHoursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $openingHours = new OpeningHours();
        $openingHours
        
        ->setOpeningMonday(new DateTime('09:00:00'))
        ->setClosingMonday(new DateTime('19:00:00'))
        ->setOpeningTuesday(new  DateTime('09:00:00'))
        ->setClosingTuesday(new DateTime('19:00:00'))
        ->setOpeningWednesday(new DateTime('09:00:00'))
        ->setClosingWednesday(new DateTime('19:00:00'))
        ->setOpeningThursday(new DateTime('09:00:00'))
        ->setClosingThursday(new DateTime('19:00:00')) 
        ->setOpeningFriday(new DateTime('09:00:00'))
        ->setClosingFriday(new DateTime('19:00:00'))
        ->setOpeningSaturday(new DateTime('09:00:00'))
        ->setClosingSaturday(new DateTime('19:00:00'))
        ->setOpeningSunday(new DateTime('00:00:00'))
        ->setClosingSunday(new DateTime('00:00:00'));
        
        $manager->persist($openingHours);
        $manager->flush();
    }
}
