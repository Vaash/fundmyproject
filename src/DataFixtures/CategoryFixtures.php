<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{

    public const JEUX = "JEUX_REFERENCE";
    public const MUSIQUE = "MUSIQUE_REFERENCE";
    public const FILM = "FILM_REFERENCE";
    public const SPORT = "SPORT_REFERENCE";

    public function load(ObjectManager $manager)
    {
        $film = new Category();
        $film->setName('Film');
        $this->addReference(self::FILM, $film);
        $manager->persist($film);

        $musique = new Category();
        $musique->setName('Musique');
        $this->addReference(self::MUSIQUE, $musique);
        $manager->persist($musique);

        $jeux = new Category();
        $jeux->setName('Jeux');
        $this->addReference(self::JEUX, $jeux);
        $manager->persist($jeux);

        $sport = new Category();
        $sport->setName('Jeux');
        $this->addReference(self::SPORT, $sport);
        $manager->persist($sport);

        $manager->flush();
    }
}
