<?php

namespace App\Repository;

use App\Entity\DictGenre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DictGenre|null find($id, $lockMode = null, $lockVersion = null)
 * @method DictGenre|null findOneBy(array $criteria, array $orderBy = null)
 * @method DictGenre[]    findAll()
 * @method DictGenre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DictGenreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DictGenre::class);
    }

    // /**
    //  * @return DictGenre[] Returns an array of DictGenre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DictGenre
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
