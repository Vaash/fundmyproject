<?php

namespace App\DataFixtures;

use App\Entity\Contribution;
use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class ContributionFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $contribution = new Contribution();
        $contribution->setUser($this->getReference(UserFixtures::ADMIN));
        $contribution->setAmount('5500.00');
        $contribution->setProject($this->getReference(ProjectFixture::PROJECT));

        $manager->persist($contribution);
        $manager->flush();
    }

    public function getDependencies() {
        return array(
            UserFixtures::class,
        );
    }
}
