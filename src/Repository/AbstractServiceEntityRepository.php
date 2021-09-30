<?php

namespace App\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class AbstractServiceEntityRepository extends EntityRepository
{

    public function __construct(EntityManagerInterface $entityManager, string $entityClass)
    {
        parent::__construct($entityManager, $entityManager->getClassMetadata($entityClass));
    }

    public function listAll(): array
    {
        return $this->findBy([]);
    }

    public function save(object $entity): void
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
    }

    public function remove(object $entity): void
    {
        $this->getEntityManager()->remove($entity);
        $this->getEntityManager()->flush();
    }
}