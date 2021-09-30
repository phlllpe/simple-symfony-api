<?php

namespace App\Controller\Cidade;

use App\Repository\CidadeServiceEntityRepository;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GetAction
{

    /**
     * @Route(name="cidade-get", path="/cidade", methods={"GET"})
     */
    public function __invoke(
        SerializerInterface $serializer,
        CidadeServiceEntityRepository $repository
    ) {
        $list = $repository->listAll();

        return new JsonResponse($serializer->toArray($list));
    }
}