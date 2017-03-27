<?php

namespace PTRO\RencontresBundle\Repository;

/**
 * PhotoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PhotoRepository extends \Doctrine\ORM\EntityRepository
{

    public function getPhotosProfile($user){
        $queryBuilder = $this->createQueryBuilder('p');
        $queryBuilder->where('p.utilisateur=:utilisateur')
            ->setParameter('utilisateur', $user)
            ->orderBy('p.ordre');
        $query = $queryBuilder->getQuery();
        $results = $query->getResult();
        return $results;
    }

    public function getOrdreMax($user){
        $queryBuilder = $this->createQueryBuilder('p');
        $queryBuilder->select('MAX(p.ordre)');
        $queryBuilder->where('p.utilisateur=:utilisateur')
            ->setParameter('utilisateur', $user);
        $query = $queryBuilder->getQuery();
        $result = $query->getSingleScalarResult();
        return $result;
    }

    public function getNbPhoto($user){
        $queryBuilder = $this->createQueryBuilder('p');
        $queryBuilder->select('COUNT(p)');
        $queryBuilder->where('p.utilisateur=:utilisateur')
            ->setParameter('utilisateur', $user);
        $query = $queryBuilder->getQuery();
        $result = $query->getSingleScalarResult();
        return $result;
    }


}
