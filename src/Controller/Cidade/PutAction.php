<?php

namespace App\Controller\Cidade;

use App\Controller\PutTrait;
use App\Entity\Cidade;
use App\Repository\CidadeServiceEntityRepository;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class PutAction
{

    use PutTrait;
    /**
     * @Route(name="cidade-put", path="/cidade/{entidade}", methods={"PUT"})
     */
    public function __invoke(
        Request $request,
        Cidade $entidade,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        CidadeServiceEntityRepository $repository
    ) {
        $responseArray = $this->save($request, $serializer, $validator, $repository, $entidade);

        return new JsonResponse($responseArray);
    }
}