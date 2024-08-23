<?php

namespace Leadtech\Domain\Exceptions;

use Exception;

class EmailNotValidException extends Exception
{

    /**
     * @param string $email
     */
    public function __construct(string $email)
    {
        parent::__construct("El email $email no es válido");
    }
}