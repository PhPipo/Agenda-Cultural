<?php

namespace App\Repository\App\Messenger;

use App\Entity\App\Messenger\test;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method test|null find($id, $lockMode = null, $lockVersion = null)
 * @method test|null findOneBy(array $criteria, array $orderBy = null)
 * @method test[]    findAll()
 * @method test[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class testRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, test::class);
    }

//    /**
//     * @return test[] Returns an array of test objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?test
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
