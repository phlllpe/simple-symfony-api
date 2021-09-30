<?php

namespace App\Repository;

use App\Entity\Estado;
use Doctrine\Persistence\ManagerRegistry;

class EstadoServiceEntityRepository extends AbstractServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry->getManager(), Estado::class);
    }
}