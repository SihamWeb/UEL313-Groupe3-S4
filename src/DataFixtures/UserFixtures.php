<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user -> setUserName("admin");
        $user -> setUserPassword("LsJKppRTEPz4uKrkhScOE6HBSvHuaIcFbAX9FWC7h/f5HffX4TBcFt7p8M0hqvGzFXL+JV8TzEYePoimaosfMQ==");
        $user -> setUserSalt(">=28!7NLw!S37zLjs7Uu[nC");
        $user -> setUserRole("ROLE_ADMIN");
        $manager -> persist($user);

        $manager->flush();
    }
}
