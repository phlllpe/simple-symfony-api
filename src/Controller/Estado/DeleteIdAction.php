<?php

namespace App\Controller\Estado;

use App\Entity\Estado;
use App\Repository\EstadoServiceEntityRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DeleteIdAction
{

    /**
     * @Route(name="estado-delete-id", path="/estado/{entidade}", methods={"DELETE"})
     */
    public function __invoke(
        Estado $entidade,
        EstadoServiceEntityRepository $repository
    ) {
        $repository->remove($entidade);

        return new JsonResponse(null, JsonResponse::HTTP_ACCEPTED);
    }
}