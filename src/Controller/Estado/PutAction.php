<?php

namespace App\Controller\Estado;

use App\Controller\PutTrait;
use App\Entity\Estado;
use App\Repository\EstadoServiceEntityRepository;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class PutAction
{

    use PutTrait;

    /**
     * @Route(name="estado-put", path="/estado/{entidade}", methods={"PUT"})
     */
    public function __invoke(
        Request $request,
        Estado $entidade,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        EstadoServiceEntityRepository $repository
    ) {
        $responseArray = $this->save($request, $serializer, $validator, $repository, $entidade);

        return new JsonResponse($responseArray);
    }
}