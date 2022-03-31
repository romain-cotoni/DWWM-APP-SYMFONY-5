<?php

namespace App\Repository;
use App\Entity\Candidat;
use App\Entity\Session;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
/**
 * @method Candidat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Candidat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Candidat[]    findAll()
 * @method Candidat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 * @method Candidat[]    findBySessionAndDates($debut, $fin, $session)
 * @method Candidat[]    findByTitreAndDates($debut, $fin, $titre)    
 * @method Candidat[]    findByDates($debut, $fin)
 */
class CandidatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candidat::class);
    }
    /**
    * @return Candidat[] Returns an array of Candidat objects
    */
    public function findByDates($date1,$date2)
    {
        return $this->createQueryBuilder('c')
                    ->join('c.session', 's')
                    ->addSelect('s')
                    ->andwhere('s.date_debut >= :debut')
                    ->setParameter('debut', $date1)
                    ->andwhere('s.date_fin <= :fin')
                    ->setParameter('fin' , $date2)
                    ->orderBy('s.date_debut', 'ASC')
                    ->getQuery()
                    ->getResult();
    }  
    /**
      * @return Candidat[] Returns an array of Candidat objects
    */
    public function findBySessionAndDates($date1,$date2,$session)
    {
        return $this->createQueryBuilder('c')
                    ->join('c.session', 's')
                    ->addSelect('s')
                    ->andWhere('s.identifiant = :identifiant')
                    ->setParameter('identifiant', $session)
                    ->andwhere('s.date_debut >= :debut')
                    ->setParameter('debut', $date1)
                    ->andwhere('s.date_fin <= :fin')
                    ->setParameter('fin' , $date2)
                    ->orderBy('s.identifiant', 'ASC')
                    ->getQuery()
                    ->getResult();
    }
    /**
    * @return Candidat[] Returns an array of Candidat objects
    */
    public function findByTitreAndDates($date1,$date2,$titre)
    {
        return $this->createQueryBuilder('c')
                    ->join('c.session', 's')
                    ->addSelect('s')
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
     * @return Candidat[] Returns an array of Candidat objects
     */
    public function findByIdentification($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.identification = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findBySession($identifiant)
    {
        return $this->createQueryBuilder('c')
                    ->join('c.session', 's')
                    ->addSelect('s')
                    ->andWhere('s.identifiant=:val')
                    ->setParameter('val', $identifiant)
                    ->getQuery()
                    ->getResult();
    }
    
}
