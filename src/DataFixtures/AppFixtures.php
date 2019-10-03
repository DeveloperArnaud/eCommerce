<?php

namespace App\DataFixtures;

use App\Entity\Sneaker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Faker\Factory::create('fr_FR');
        for($i = 0 ; $i < 20 ; $i++) {
            $sneaker = new Sneaker();
            $sneaker->setCouleur($faker->colorName);
            $sneaker->setDescription($faker->realText(200));
            $sneaker->setMarque("NIKE");
            $sneaker->setTaille($faker->randomFloat(1, 30, 45));
            $sneaker->setModele("Sport");
            $sneaker->setTitre("Nike ".$faker->text(15));
            $manager->persist($sneaker);
            }
        $manager->flush();
    }
}
