<?php

namespace App\Controller\Estado;

use App\Controller\PostTrait;
use App\Controller\ValidateTrait;
use App\Entity\Estado;
use App\Repository\EstadoServiceEntityRepository;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class PostAction
{
    use PostTrait;
    /**
     * @Route(name="estado-post", path="/estado", methods={"POST"})
     */
    public function __invoke(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        EstadoServiceEntityRepository $repository
    ) {
        $responseArray = $this->save($request, $validator, $serializer, Estado::class, $repository);

        return new JsonResponse($responseArray);
    }
}