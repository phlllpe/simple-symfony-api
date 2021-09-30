<?php

namespace App\Controller\Estado;

use App\Repository\EstadoServiceEntityRepository;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GetAction
{

    /**mobi
     * @Route(name="estado-get", path="/estado", methods={"GET"})
     */
    public function __invoke(
        SerializerInterface $serializer,
        EstadoServiceEntityRepository $repository
    ) {
        $list = $repository->listAll();

        return new JsonResponse($serializer->toArray($list));
    }
}