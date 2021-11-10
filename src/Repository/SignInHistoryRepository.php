<?php

namespace App\Repository;

use App\Entity\SignInHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SignInHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method SignInHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method SignInHistory[]    findAll()
 * @method SignInHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SignInHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SignInHistory::class);
    }

    // /**
    //  * @return SignInHistory[] Returns an array of SignInHistory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SignInHistory
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

}
