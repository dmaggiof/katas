<?php

namespace Leadtech\Domain\Events;

use Leadtech\Domain\Interfaces\DomainEventInterface;

class UserCreatedEvent implements DomainEventInterface
{
    public function __construct(private readonly string $name, private readonly  string $email, private readonly int $createdAt){}

    public function __invoke() {

    }

    public function toPrimitives(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email
        ];
    }

    public function getEventName()
    {
        return "UserCreated";
    }

    public function createdAt()
    {
        return $this->createdAt;
    }
}