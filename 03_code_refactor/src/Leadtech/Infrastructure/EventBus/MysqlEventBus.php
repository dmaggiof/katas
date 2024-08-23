<?php

namespace Leadtech\Infrastructure\EventBus;

use Leadtech\Domain\Interfaces\DomainEventInterface;
use Leadtech\Domain\Interfaces\EventBusInterface;
use Doctrine\ORM\EntityManager;

class MysqlEventBus implements EventBusInterface
{
    private \Doctrine\DBAL\Connection $connection;

    public function __construct(EntityManager $entityManager)
    {
        $this->connection = $entityManager->getConnection();
    }

    public function publish(DomainEventInterface $domainDomainEvent): void
    {
        $name = $domainDomainEvent->getEventName();
        $body = json_encode($domainDomainEvent->toPrimitives());
        $occurredOn = $domainDomainEvent->createdAt();

        $query = "INSERT INTO domain_events (name,  body,  occurred_on) VALUES (:name, :body, :occurredOn)";

        $this->connection->executeQuery($query, [
            'name' => $name,
            'body' => $body,
            'occurredOn' => $occurredOn
        ]);
    }

}