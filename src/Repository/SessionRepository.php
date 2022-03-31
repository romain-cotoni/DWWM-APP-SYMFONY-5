<?php

namespace App\Repository;

use App\Entity\Session;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Session|null find($id, $lockMode = null, $lockVersion = null)
 * @method Session|null findOneBy(array $criteria, array $orderBy = null)
 * @method Session[]    findAll()
 * @method Session[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 * @method Session[]    findByDates($val1,$val2)
 * @method Session[]    findByDatesAndTitre($val1,$val2,$titre)
 */
class SessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Session::class);
    }

    /**
      * @return Session[] Returns an array of Session objects
    */
    public function findByDates($date1,$date2)
    {
        return $this->createQueryBuilder('s')
                    ->andwhere('s.date_debut >= :debut')
                    ->setParameter('debut', $date1)
                    ->andwhere('s.date_fin <= :fin')
                    ->setParameter('fin' , $date2)
                    ->orderBy('s.date_debut', 'ASC')
                    ->getQuery()
                    ->getResult();
    }  

    /**
      * @return Session[] Returns an array of Session objects
    */
    public function findByDatesAndTitre($date1,$date2,$titre)
    {
        return $this->createQueryBuilder('s')
                    ->join('s.titres_id', 't')
                    ->addSelect('t')
                    ->andWhere('t.libelle_court = :titre')
                    ->setParameter('titre', $titre)
                    ->andwhere('s.date_debut >= :debut')
                    ->setParameter('debut', $date1)
                    ->andwhere('s.date_fin <= :fin')
                    ->setParameter('fin' , $date2)
                    ->orderBy('t.libelle_court', 'ASC')
                    ->getQuery()
                    ->getResult();
    }
    
    /**
      * @return Session[] Returns an array of Session objects
    */
    public function findByTitre($titre)
    {
        return $this->createQueryBuilder('s')
                    ->join('s.titres_id', 't')
                    ->addSelect('t')
                    ->andWhere('t.libelle_court = :titre')
                    ->setParameter('titre', $titre)
                    ->orderBy('t.libelle_court', 'ASC')
                    ->getQuery()
                    ->getResult();
    }
}
