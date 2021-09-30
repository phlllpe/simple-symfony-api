<?php

namespace App\Controller;

use Symfony\Component\Validator\Validator\ValidatorInterface;

trait ValidateTrait
{

    private function validate(ValidatorInterface $validator, object $entity): void
    {
        $violationsList = $validator->validate($entity);

        if ($violationsList->count()) {
            $messages = [];

            foreach ($violationsList as $violation) {
                $property = $violation->getPropertyPath();
                $message = $violation->getMessage();
                $messages[] = "{$property} - {$message}";
            }

            throw new \InvalidArgumentException(implode(', ', $messages));
        }
    }
}