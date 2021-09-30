<?php

namespace App\Controller\Cidade;

use App\Controller\PostTrait;
use App\Entity\Cidade;
use App\Repository\CidadeServiceEntityRepository;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class PostAction
{

    use PostTrait;

    /**
     * @Route(name="cidade-post", path="/cidade", methods={"POST"})
     */
    public function __invoke(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        CidadeServiceEntityRepository $repository
    ) {
        $responseArray = $this->save($request, $validator, $serializer, Cidade::class, $repository);

        return new JsonResponse($responseArray);
    }
}