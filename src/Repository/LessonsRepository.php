<?php

namespace App\Repository;

use App\Entity\Lessons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Progress;



/**
 * @extends ServiceEntityRepository<Lessons>
 *
 * @method Lessons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lessons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lessons[]    findAll()
 * @method Lessons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LessonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lessons::class);
    }

    /**
     * Finds all lessons for a specific course.
     *
     * @param Courses $course
     * @return Lessons[]
     */
    public function findByCourse($course): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.course = :course')
            ->setParameter('course', $course)
            ->getQuery()
            ->getResult();
    }

    /**
     * Count how many lessons are completed by a user for a specific course.
     *
     * @param $enrollment
     * @return int
     */
    public function countCompletedLessons($enrollment): int
    {
        $qb = $this->createQueryBuilder('l')
            ->join(Progress::class, 'p', 'WITH', 'p.lessons = l.id') // Join lessons with progress
            ->andWhere('p.enrollment = :enrollment')  // Filter by enrollment
            ->andWhere('p.status = :status')  // Filter by status (completed lessons)
            ->setParameter('enrollment', $enrollment)  // Set the enrollment parameter
            ->setParameter('status', 1);  // Assuming 2 means completed

        // Execute the query and return the count of completed lessons
        return (int) $qb->select('COUNT(l.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

}
