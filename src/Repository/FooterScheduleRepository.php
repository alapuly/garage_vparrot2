<?php

namespace App\Repository;

use App\Entity\FooterSchedule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FooterSchedule>
 *
 * @method FooterSchedule|null find($id, $lockMode = null, $lockVersion = null)
 * @method FooterSchedule|null findOneBy(array $criteria, array $orderBy = null)
 * @method FooterSchedule[]    findAll()
 * @method FooterSchedule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FooterScheduleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FooterSchedule::class);
    }

       /**
        * @return FooterSchedule[] Returns an array of FooterSchedule objects
        */
       public function findByExampleField($value): array
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

       public function findOneBySomeField($value): ?FooterSchedule
       {
           return $this->createQueryBuilder('f')
               ->andWhere('f.exampleField = :val')
               ->setParameter('val', $value)
               ->getQuery()
               ->getOneOrNullResult()
           ;
       }
}
