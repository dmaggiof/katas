<?php

namespace Leadtech\Infrastructure\EventBus;

use Leadtech\Domain\Interfaces\DomainEventInterface;
use Leadtech\Domain\Interfaces\EventBusInterface;

class InMemoryEventBus implements EventBusInterface
{
    private array $fakeData;

    public function __construct()
    {
    }

    public function publish(DomainEventInterface $domainEvent): void
    {
        $name = $domainEvent->getEventName();
        $body = json_encode($domainEvent->toPrimitives());
        $occurredOn = $domainEvent->createdAt();

        $this->fakeData[] = [
            'name' => $name,
            'body' => $body,
            'occurredOn' => $occurredOn
        ];
    }

    public function pullEvents(): array
    {
        $events = $this->fakeData;
        $this->fakeData = [];
        return $events;
    }

}