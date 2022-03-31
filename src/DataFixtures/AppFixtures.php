<?php

namespace App\DataFixtures;

use App\Entity\Snowflake;
use DateTimeImmutable;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for($i = 0;$i < 3;$i++){
            $snowflake = new Snowflake();
            $snowflake->setName($faker->firstName)
                      ->setNumber($faker->randomNumber(4, false))
                      ->setDescription($faker->paragraph())
                      ->setCreatedAt(new DateTimeImmutable());
                      
            $manager->persist($snowflake);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
