<?php

namespace App\Repository;

use App\Entity\Certificate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Certificate>
 *
 * @method Certificate|null find($id, $lockMode = null, $lockVersion = null)
 * @method Certificate|null findOneBy(array $criteria, array $orderBy = null)
 * @method Certificate[]    findAll()
 * @method Certificate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CertificateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Certificate::class);
    }

    /**
     * Example of a custom query to find certificates by user.
     */
    public function findByUser($userId)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.user = :user')
            ->setParameter('user', $userId)
            ->orderBy('c.issuedAt', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
