<?php

namespace App\DataFixtures;

use App\Entity\OpeningHours;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Time;

class OpeningHourFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $openingHour = new OpeningHours();
        // $openingHour 
        // ->setopeningMondayMorning(new Time('09:00:00'))
        // ->setclosingMondayMorning(new Time('13:00:00'))
        // ->setopeningMondayAfternoon(new Time('14:00:00'))
        // ->setclosingMondayAfternoon(new Time('19:00:00'))
        // ->setopeningTuesdayMorning(new Time('09:00:00'))
        // ->setclosingTuesdayMorning(new Time('13:00:00'))
        // ->setopeningTuesdayAfternoon(new Time('14:00:00'))
        // ->setclosingTuesdayAfternoon(new Time('19:00:00'))
        // ->setopeningWednesdayMorning(new Time('09:00:00'))
        // ->setclosingWednesdayAfternoon(new Time('13:00:00'))
        // ->setopeningThursdayMorning(new Time('09:00:00'))
        // ->setclosingThursdayAfternoon(new Time('09:00:00'))
        // ->setopeningFridayMorning(new Time('09:00:00'))
        // ->setclosingFridayMorning(new Time('09:00:00'))
        // ->setopeningFridayAfternon(new Time('09:00:00'))
        // ->setclosingFridayAfternoon(new Time('09:00:00'))
        // ->setopeningSaturdayMorning(new Time('09:00:00'))
        // ->setclosingSaturdayMorning(new Time('09:00:00'))
        // ->setopeningSaturdayAfternoon(new Time('09:00:00'))
        // ->setclosingSaturdayAfternoon(new Time('09:00:00'))
        // ->setopeningSundayMorning(new Time('09:00:00'))
        // ->setclosingSundayMorning(new Time('09:00:00'))
        // ->setclosingSundayAfternoon(new Time('09:00:00'));

        $manager->persist($openingHour);
        $manager->flush();
    }
}
