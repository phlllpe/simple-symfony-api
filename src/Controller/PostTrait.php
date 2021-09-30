<?php

namespace App\Controller;

use App\Repository\AbstractServiceEntityRepository;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;

trait PostTrait
{
    use ValidateTrait;

    public function save(
        Request $request,
        ValidatorInterface $validator,
        SerializerInterface $serializer,
        string $entityClass,
        AbstractServiceEntityRepository $repository
    ): array
    {
        $requestContent = $request->getContent();
        $entity = $serializer->deserialize($requestContent, $entityClass, 'json');

        $this->validate($validator, $entity);
        $repository->save($entity);

        return $serializer->toArray($entity);
    }
}