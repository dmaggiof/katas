<?php

namespace Leadtech\Domain\Interfaces;

interface EventBusInterface
{
    public function publish(DomainEventInterface $domainEvent): void;
}