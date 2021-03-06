<?php

namespace App\Repository;

use App\Entity\SpokenLanguages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SpokenLanguages|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpokenLanguages|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpokenLanguages[]    findAll()
 * @method SpokenLanguages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpokenLanguagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SpokenLanguages::class);
    }
    public function findStat()
    {
        return $this->createQueryBuilder('o')
            ->select('Count(user.email) as count, o.level')
            ->Join('o.user','user')
            ->groupBy('o.level')
            ->orderBy('count', 'DESC' )
            ->getQuery()
            ->getResult()
            ;
    }
    // /**
    //  * @return SpokenLanguages[] Returns an array of SpokenLanguages objects
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
    public function findOneBySomeField($value): ?SpokenLanguages
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
