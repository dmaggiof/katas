<?php

namespace Leadtech\Application\User;

use Leadtech\Domain\Events\UserCreatedEvent;
use Leadtech\Infrastructure\Notificator\EmailNotificator;

readonly class UserCreated
{
    public function __construct(){}

    public function __invoke(UserCreatedEvent $event) {
        $data = $event->toPrimitives();
        $email = $data['email'];
        $name = $data['name'];
        $subject = 'Welcome to Leadtech';
        $message = "Hello $name, thanks for registering on oursite. <br>Regards, Leadtech Team";
        $notificator = new EmailNotificator(
            $email,
            $subject,
            $message
        );
        $notificator->notify();
    }
}