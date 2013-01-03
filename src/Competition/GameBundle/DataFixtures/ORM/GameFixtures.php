<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 29/12/12
 * Time: 13:17
 */

namespace Competition\GameBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Competition\GameBundle\Entity\Game;


class BlogFixtures extends  AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $game1 = new Game();
        $game1->setName('Team Fortress 2');
        $game1->setAlias('TF2');
        $game1->setSlug('tf2');
        $manager->persist($game1);

        $game2 = new Game();
        $game2->setName('Defense of the Ancients 2');
        $game2->setAlias('Dota 2');
        $game2->setSlug('dota2');
        $manager->persist($game2);

        $game3 = new Game();
        $game3->setName('Counter Strike Global Offensive');
        $game3->setAlias('CS:GO');
        $game3->setSlug('csgo');
        $manager->persist($game3);

        $game4 = new Game();
        $game4->setName('League of Legends');
        $game4->setAlias('LOL');
        $game4->setSlug('lol');
        $manager->persist($game4);



        $manager->flush();

        $this->addReference('game-1', $game1);
        $this->addReference('game-2', $game2);
        $this->addReference('game-3', $game3);
        $this->addReference('game-4', $game4);
    }

    public function getOrder()
    {
        return 1;
    }

}