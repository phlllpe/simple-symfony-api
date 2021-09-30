<?php

namespace App\Controller\Estado;

use App\Entity\Estado;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GetIdAction
{

    /**
     * @Route(name="estado-get-id", path="/estado/{entidade}", methods={"GET"})
     */
    public function __invoke(
        Estado $entidade,
        SerializerInterface $serializer
    ) {
        return new JsonResponse($serializer->toArray($entidade));
    }
}