<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jordi Andújar
 * Date: 01/01/13
 * Time: 21:44
 */
namespace Competition\GameBundle\Repository;
use Doctrine\ORM\EntityRepository;

class GameRepository extends EntityRepository
{
    public function getSlugs()
    {
        $slugs = $this->createQueryBuilder('g')
            ->select('g.slug')
            ->getQuery()
            ->getResult();
        return $slugs;
    }

}
