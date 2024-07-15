<?php

namespace Leadtech\Domain\Interfaces;

interface DomainEventInterface
{
    public function toPrimitives(): array;

    public function getEventName();

    public function createdAt();
}