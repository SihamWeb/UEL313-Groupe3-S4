<?php

namespace App\Repository;

use App\Entity\Lien;
use App\Entity\Tag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @extends ServiceEntityRepository<Lien>
 *
 * @method Lien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lien[]    findAll()
 * @method Lien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lien::class);
    }

  
    public function paginationQuery()
    {
        return $this->createQueryBuilder('l') 
            ->orderBy('l.id', 'ASC')
            ->getQuery()
        ;
    }

    public function findByTag(Tag $tag): array
    {
        return $this->createQueryBuilder('l')
            ->join('l.tag_id', 'lt')
            ->where('lt.id = :tagId')
            ->setParameter('tagId', $tag->getId())
            ->getQuery()
            ->getResult();

    }

//    public function findOneBySomeField($value): ?Lien
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
