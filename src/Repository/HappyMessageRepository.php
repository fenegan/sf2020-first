<?php

namespace App\Repository;

use App\Entity\HappyMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method HappyMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method HappyMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method HappyMessage[]    findAll()
 * @method HappyMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HappyMessageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, HappyMessage::class);
    }

//    /**
//     * @return HappyMessage[] Returns an array of HappyMessage objects
//     */
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
    public function findOneBySomeField($value): ?HappyMessage
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
