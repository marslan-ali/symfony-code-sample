<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 *  Class AppFixtures
 *  @package    App\DataFixtures
 *  @author     Arslan Ali
 *  @email      marslan.ali@gmail.com
 */
class AppFixtures extends Fixture
{
    /**
     * Loads App fixtures
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
