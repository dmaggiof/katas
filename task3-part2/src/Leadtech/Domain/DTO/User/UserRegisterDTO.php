<?php

namespace Leadtech\Domain\DTO\User;

readonly class UserRegisterDTO
{
    public function __construct(public string $name, public string $email) {

    }
}