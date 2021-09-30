<?php

namespace App\Controller;

use App\Repository\AbstractServiceEntityRepository;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;

trait PutTrait
{
    use ValidateTrait;

    public function save(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        AbstractServiceEntityRepository $repository,
        object $entity
    )
    {
        $mergedEntityArray = $this->mergeEntities($serializer, $request, $entity);
        $mergedEntidade = $serializer->fromArray($mergedEntityArray, get_class($entity));

        $this->validate($validator, $mergedEntidade);
        $repository->save($mergedEntidade);

        return $mergedEntityArray;
    }

    private function mergeEntities(SerializerInterface $serializer, Request $request, object $entity): array
    {
        $requestData = json_decode($request->getContent() ?? '{}', true);
        $entityData = $serializer->toArray($entity);

        return array_merge($entityData, $requestData);
    }
}