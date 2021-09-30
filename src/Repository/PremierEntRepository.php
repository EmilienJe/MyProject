<?php

namespace App\Repository;

use App\Entity\PremierEnt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PremierEnt|null find($id, $lockMode = null, $lockVersion = null)
 * @method PremierEnt|null findOneBy(array $criteria, array $orderBy = null)
 * @method PremierEnt[]    findAll()
 * @method PremierEnt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PremierEntRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PremierEnt::class);
    }

    // /**
    //  * @return PremierEnt[] Returns an array of PremierEnt objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PremierEnt
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
