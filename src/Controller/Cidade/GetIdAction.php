<?php

namespace App\Controller\Cidade;

use App\Entity\Cidade;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GetIdAction
{

    /**
     * @Route(name="cidade-get-id", path="/cidade/{entidade}", methods={"GET"})
     */
    public function __invoke(
        Cidade $entidade,
        SerializerInterface $serializer
    ) {
        return new JsonResponse($serializer->toArray($entidade));
    }
}