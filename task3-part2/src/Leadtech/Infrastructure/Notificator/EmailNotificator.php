<?php

namespace Leadtech\Infrastructure\Notificator;

use Leadtech\Domain\Interfaces\Notificator\UserNotificatorInterface;

class EmailNotificator implements UserNotificatorInterface
{
    public function __construct(private readonly string $email, private readonly string $subject, private readonly string $message)
    {

    }

    public function notify(): void
    {
        mail($this->email, $this->subject, $this->message);

    }
}