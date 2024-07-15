<?php

namespace Leadtech\Domain\VO\User;

use Leadtech\Domain\Exceptions\EmailNotValidException;
use Leadtech\Domain\Exceptions\UserNameTooLongException;

class NameVO
{
    public function __construct(public readonly string $name){
        $this->validate();
    }

    private function validate(): void
    {
        if (strlen($this->name) > 70) {
            throw new UserNameTooLongException($this->name);
        }
    }
}