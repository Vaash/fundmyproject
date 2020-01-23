<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{

    public const ADMIN = "ADMIN_USER_REFERENCE";

    public function load(ObjectManager $manager)
    {
        $ronald_Admin = new User();
        $ronald_Admin->setFirstname('Ronald');
        $ronald_Admin->setLastname('MacDonald');
        $ronald_Admin->setEmail('Ronald.MacDonald@Macdo.com');
        $ronald_Admin->setPassword('bigmac');
        $ronald_Admin->setRoles(['ROLE_ADMIN']);
        $this->addReference(self::ADMIN, $ronald_Admin);

        $manager->persist($ronald_Admin);
        $manager->flush();
    }
}
