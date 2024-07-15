<?php

namespace Leadtech\Application\User;

use Leadtech\Domain\Interfaces\EventBusInterface;
use Leadtech\Domain\DTO\User\UserRegisterDTO;
use Leadtech\Domain\Entity\User;
use Leadtech\Domain\Events\UserCreatedEvent;
use Leadtech\Domain\Interfaces\User\UserRepositoryInterface;
use Leadtech\Domain\VO\Shared\EmailVO;
use Leadtech\Domain\VO\User\NameVO;
use Psr\Log\LoggerInterface;


readonly class RegisterUseCase
{
    public function __construct(
        private UserRepositoryInterface $userRepository,
        private EventBusInterface $eventBus,
        private LoggerInterface $logger)
    {}

    public function execute(UserRegisterDTO $userRegisterDTO): void
    {
        $name = $userRegisterDTO->name;
        $email = $userRegisterDTO->email;

        $user = new User(new NameVO($name), new EmailVO($email));

        $this->userRepository->save($user);

        $this->logger->info("Se ha creado el nuevo usuario");

        $this->eventBus->publish(new UserCreatedEvent($name, $email, time()));
    }
}