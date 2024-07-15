<?php

namespace Leadtech\Domain\VO\Shared;

use Leadtech\Domain\Exceptions\EmailNotValidException;

class EmailVO
{
    /**
     * @throws EmailNotValidException
     */
    public function __construct(public readonly string $email){
        $this->validate();
    }

    private function validate(): void
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new EmailNotValidException($this->email);
        }
    }

    public function toString(): string
    {
        return $this->email;
    }


}