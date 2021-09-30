<?php

namespace App\Controller\Cidade;

use App\Entity\Cidade;
use App\Repository\CidadeServiceEntityRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DeleteIdAction
{

    /**
     * @Route(name="cidade-delete-id", path="/cidade/{entidade}", methods={"DELETE"})
     */
    public function __invoke(
        Cidade $entidade,
        CidadeServiceEntityRepository $repository
    ) {
        $repository->remove($entidade);

        return new JsonResponse(null, JsonResponse::HTTP_ACCEPTED);
    }
}