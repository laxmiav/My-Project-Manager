<?php

namespace App\Repository;

use App\Entity\Tasks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tasks>
 *
 * @method Tasks|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tasks|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tasks[]    findAll()
 * @method Tasks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TasksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tasks::class);
    }

    public function save(Tasks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Tasks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    // to find all the tasks using project id

    public function findTasksByProjects($projectsid)
   {

    $entityManager = $this->getEntityManager();
    $query = $entityManager->createQuery(
        'SELECT t
        FROM App\Entity\Tasks t
        JOIN t.Project p
        WHERE p.id = :projectid'
    )
     ->setParameter('projectid',$projectsid);

     return $query->getResult();
     
       
   }

   // to find all the tasks using project id

   public function findTasksByTodo($projectsid)
   {

    $entityManager = $this->getEntityManager();
    $query = $entityManager->createQuery(
        'SELECT t
        FROM App\Entity\Tasks t
        JOIN t.Project p
        WHERE p.id = :projectid
        AND  t.Status = 1'
    )
    
    ->setParameter('projectid',$projectsid);
     return $query->getResult();
     
       
   }
   public function findTasksByProgress($projectsid)
   {
 
    $entityManager = $this->getEntityManager();
    $query = $entityManager->createQuery(
        'SELECT t
        FROM App\Entity\Tasks t
        JOIN t.Project p
        WHERE p.id = :projectid
        AND  t.Status = 2'
    )
    
    ->setParameter('projectid',$projectsid);
     return $query->getResult();
     
       
   }
   public function findTasksByDone($projectsid)
   {

    $entityManager = $this->getEntityManager();
    $query = $entityManager->createQuery(
        'SELECT t
        FROM App\Entity\Tasks t
        JOIN t.Project p
        WHERE p.id = :projectid
        AND  t.Status = 3'
    )
    ->setParameter('projectid',$projectsid);

     return $query->getResult();
     
       
   }

   
//    /**
//     * @return Tasks[] Returns an array of Tasks objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tasks
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
