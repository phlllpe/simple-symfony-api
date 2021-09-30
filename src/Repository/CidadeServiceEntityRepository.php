<?php

namespace App\Repository;

use App\Entity\Cidade;
use Doctrine\Persistence\ManagerRegistry;

class CidadeServiceEntityRepository extends AbstractServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry->getManager(), Cidade::class);
    }
}