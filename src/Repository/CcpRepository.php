<?php

namespace App\Repository;

use App\Entity\Ccp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ccp|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ccp|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ccp[]    findAll()
 * @method Ccp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CcpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ccp::class);
    }

    // /**
    //  * @return Ccp[] Returns an array of Ccp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ccp
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
