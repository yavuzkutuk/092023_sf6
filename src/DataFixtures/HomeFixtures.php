<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Home;

class HomeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $fixtures = [
            'daniel qui rit',
            'Yannick qui était en retard',
            'Sajid qui rale',
            'Julien qui se balade dans les vignes'
        ];

        foreach ($fixtures as $value) {
            $home = new Home();
            $home->setName($value);
            $manager->persist($home);
        }
        $manager->flush();
    }
}
