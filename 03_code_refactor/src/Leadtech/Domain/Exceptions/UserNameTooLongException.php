<?php

namespace Leadtech\Domain\Exceptions;

use Exception;

class UserNameTooLongException extends Exception
{

    /**
     * @param string $email
     */
    public function __construct(string $name)
    {
        parent::__construct("El nombre '$name' es demasiado largo");
    }
}