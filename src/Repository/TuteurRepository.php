<?php

namespace App\Repository;

use App\Entity\Tuteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tuteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tuteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tuteur[]    findAll()
 * @method Tuteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TuteurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tuteur::class);
    }


    public function findEntrepriseByTuteurId($id)
    {
        return $this->createQueryBuilder('t')
            ->where('t.entreprise = :id')->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }

}
