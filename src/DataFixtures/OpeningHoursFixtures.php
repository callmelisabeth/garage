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
        
        ->setOpeningMondayMorning(new DateTime('09:00:00'))
        ->setClosingMondayMorning(new DateTime('13:00:00'))
        ->setOpeningMondayAfternoon(new DateTime('14:00:00'))
        ->setClosingMondayAfternoon(new DateTime('19:00:00'))
        ->setOpeningTuesdayMorning(new  DateTime('09:00:00'))
        ->setClosingTuesdayMorning(new DateTime('13:00:00'))
        ->setOpeningTuesdayAfternoon(new DateTime('14:00:00'))
        ->setClosingTuesdayAfternoon(new DateTime('19:00:00'))
        ->setOpeningWednesdayMorning(new DateTime('09:00:00'))
        ->setClosingWednesdayMorning(new DateTime('13:00:00'))
        ->setOpeningWednesdayAfternon(new DateTime('14:00:00'))
        ->setClosingWednesdayAfternon(new DateTime('19:00:00'))
        ->setOpeningThursdayMorning(new DateTime('09:00:00'))
        ->setClosingThursdayMorning(new DateTime('13:00:00')) 
        ->setOpeningThursdayAfternoon(new DateTime('14:00:00'))
        ->setClosingThursdayAfternoon(new DateTime('19:00:00'))
        ->setOpeningFridayMorning(new DateTime('09:00:00'))
        ->setClosingFridayMorning(new DateTime('13:00:00'))
        ->setOpeningFridayAfternon(new DateTime('14:00:00'))
        ->setClosingFridayAfternoon(new DateTime('19:00:00'))
        ->setOpeningSaturdayMorning(new DateTime('09:00:00'))
        ->setClosingSaturdayMorning(new DateTime('13:00:00'))
        ->setOpeningSaturdayAfternoon(new DateTime('14:00:00'))
        ->setClosingSaturdayAfternoon(new DateTime('19:00:00'))
        ->setOpeningSundayMorning(new DateTime('00:00:00'))
        ->setClosingSundayMorning(new DateTime('00:00:00'))
        ->setOpeningSundayAfternoon(new DateTime('00:00:00'))
        ->setClosingSundayAfternoon(new DateTime('00:00:00'));


        $manager->persist($openingHours);
        $manager->flush();
    }
}
