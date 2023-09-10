<?php

namespace App\Repository;

use App\Entity\Projets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Projets>
 *
 * @method Projets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projets[]    findAll()
 * @method Projets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projets::class);
    }

    public function save(Projets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Projets $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    public function findAllById($id) 
    {
        return $this->createQueryBuilder('p')
           ->andWhere('p.id = :val')
           ->setParameter('val', $id)
           
          
           ->getQuery()
           ->getResult()
       ;

    }

    
     // to find all the project using user id

     public function findAllByUserId($id)
     {
  
      $entityManager = $this->getEntityManager();
      $query = $entityManager->createQuery(
          'SELECT p
          FROM App\Entity\Projets p
          JOIN p.user u
          WHERE u.id = :userid'
      )
       ->setParameter('userid',$id);
      
  
       return $query->getResult();
       
         
     }

//    /**
//     * @return Projets[] Returns an array of Projets objects
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

//    public function findOneBySomeField($value): ?Projets
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

}
