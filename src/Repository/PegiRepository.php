<?php

namespace App\Repository;

use App\Entity\Pegi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pegi>
 *
 * @method Pegi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pegi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pegi[]    findAll()
 * @method Pegi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PegiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pegi::class);
    }

//    /**
//     * @return Pegi[] Returns an array of Pegi objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Pegi
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
