<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProjectFixture extends Fixture
{

    public const PROJECT = "PROJECT_REFERENCE";
    public const GOODGIRL = "GOODGIRL_REFERENCE";
    public const YEUX = "YEUX_REFERENCE";
    public const DABADO = "DABADO_REFERENCE";
    public const DOOSH = "DOOSH_REFERENCE";

    public function load(ObjectManager $manager)
    {
        $goodgirl = new Project();
        $goodgirl->setName('Goodgirl.');
        $goodgirl->setImage('project1.png');
        $goodgirl->setDescription('Ce film parle de ...');
        $goodgirl->setGoal(5000.00);
        $goodgirl->setExcerpt('[Insert here]');
        $goodgirl->setUser($this->getReference(UserFixtures::ADMIN));
        $goodgirl->addCategory($this->getReference(CategoryFixtures::FILM));
        $this->addReference(self::GOODGIRL, $goodgirl);

        $manager->persist($goodgirl);
        $manager->flush();

        $yeux = new Project();
        $yeux->setName('Les yeux dans le bleu.');
        $yeux->setImage('uploads/placeholder.png');
        $yeux->setDescription('Revivez la grande épopée de l\'équipe de France de football lors du mondial de football 2010.');
        $yeux->setGoal(5050.00);
        $yeux->setExcerpt('[Insert here2]');
        $yeux->setUser($this->getReference(UserFixtures::ADMIN));
        $yeux->addCategory($this->getReference(CategoryFixtures::FILM));
        $this->addReference(self::YEUX, $yeux);

        $manager->persist($yeux);
        $manager->flush();

        $dabado = new Project();
        $dabado->setName('Dabado.');
        $dabado->setImage('project3.png');
        $dabado->setDescription('Un jeu fantastique peint à la main. Plongez dans des aventures extra-ordinaires !');
        $dabado->setGoal(5100);
        $dabado->setExcerpt('[Insert here3]');
        $dabado->setUser($this->getReference(UserFixtures::ADMIN));
        $dabado->addCategory($this->getReference(CategoryFixtures::JEUX));
        $this->addReference(self::DABADO, $dabado);

        $manager->persist($dabado);
        $manager->flush();

        $doosh = new Project();
        $doosh->setName('Doosh.');
        $doosh->setImage('project4.png');
        $doosh->setDescription('Venez m\'accompagner dans mon projet de création musicale avec clip vidéo !');
        $doosh->setGoal(5150.00);
        $doosh->setExcerpt('[Insert here4]');
        $doosh->setUser($this->getReference(UserFixtures::ADMIN));
        $doosh->addCategory($this->getReference(CategoryFixtures::MUSIQUE));
        $this->addReference(self::DOOSH, $doosh);

        $manager->persist($doosh);
        $manager->flush();
    }
}
