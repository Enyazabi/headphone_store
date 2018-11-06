<?php

namespace App\Repository;

use App\Entity\Headphone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Headphone|null find($id, $lockMode = null, $lockVersion = null)
 * @method Headphone|null findOneBy(array $criteria, array $orderBy = null)
 * @method Headphone[]    findAll()
 * @method Headphone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HeadphoneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Headphone::class);
    }

    // /**
    //  * @return Headphone[] Returns an array of Headphone objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Headphone
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
