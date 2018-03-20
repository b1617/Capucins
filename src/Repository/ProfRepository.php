<?php

namespace App\Repository;

use App\Entity\Prof;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Prof|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prof|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prof[]    findAll()
 * @method Prof[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Prof::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
