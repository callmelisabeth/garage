<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordCoder,)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin->setEmail('admin@test.fr');
        $admin->setFirstname('Victor');
        $admin->setLastname('Parrot');
        $admin->setPassword(
            $this->passwordCoder->hashPassword($admin, 'admin')
        );
        $admin->setRoles(['ROLE_ADMIN']);
        $manager->flush();

        $faker = Faker\Factory::create('fr_FR');
        for ($usr = 1; $usr <= 2; $usr++) {
            $user = new User();
            $user->setEmail($faker->email);
            $user->setFirstname($faker->firstName);
            $user->setLastname($faker->lastName);
            $user->setPassword(
                $this->passwordCoder->hashPassword($user, 'secret')
            );
            $manager->persist($user);
        }
    }
}
