<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $harry = (new User())
            ->setEmail('Harry.Potter@hogwarts.com')
            ->setName('Harry Potter')
            ->setAge(17)
        ;
        $manager->persist($harry);

        $hermine = (new User())
            ->setEmail('Hermine.Granger@hogwarts.com')
            ->setName('Hermine Granger')
            ->setAge(16)
        ;
        $manager->persist($hermine);

        $manager->flush();
    }
}
