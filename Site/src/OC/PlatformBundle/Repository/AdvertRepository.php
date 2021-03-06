<?php

namespace OC\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;
/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdvertRepository extends EntityRepository
{

    public function findAll()
    {
        //Création de la requête
        //On récupère la Query
        //On récupère les résultats à partir de la Query
        return $this
            ->createQueryBuilder('a')
            ->getQuery()
            ->getResult();
    }
}
