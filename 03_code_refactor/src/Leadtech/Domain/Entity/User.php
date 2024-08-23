<?php

namespace Leadtech\Domain\Entity;

use Leadtech\Domain\VO\Shared\EmailVO;
use Leadtech\Domain\VO\User\NameVO;

class User
{
    private int $id;
    public function __construct(public NameVO $name, public EmailVO $email){
    }

    public function getEmail(): string
    {
        return $this->email->toString();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

}