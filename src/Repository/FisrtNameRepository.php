<?php

namespace App\Repository;

use App\Entity\FisrtName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FisrtName|null find($id, $lockMode = null, $lockVersion = null)
 * @method FisrtName|null findOneBy(array $criteria, array $orderBy = null)
 * @method FisrtName[]    findAll()
 * @method FisrtName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FisrtNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FisrtName::class);
    }

    // /**
    //  * @return FisrtName[] Returns an array of FisrtName objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FisrtName
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
