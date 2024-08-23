<?php

namespace Tests\Leadtech\Application;

use Leadtech\Application\User\RegisterUseCase;
use Leadtech\Domain\DTO\User\UserRegisterDTO;
use Leadtech\Infrastructure\EventBus\InMemoryEventBus;
use Leadtech\Infrastructure\Repository\User\InMemoryRepository\UserRepository;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

class RegisterUser extends TestCase
{
    public function testRegisterUser()
    {
        $userRegisterDto = new UserRegisterDTO('Daniel','daniel@maggio.com');
        $userRepository = new UserRepository();
        $eventBus = new InMemoryEventBus();
        $logger = $this->createMock(LoggerInterface::class);

        $registerUseCase = new RegisterUseCase($userRepository, $eventBus, $logger);
        $registerUseCase->execute($userRegisterDto);

        $this->assertUserExists($userRepository);
        $this->assertEventWasPublished($eventBus);
    }

    /**
     * @param UserRepository $userRepository
     * @return void
     */
    public function assertUserExists(UserRepository $userRepository): void
    {
        $user = $userRepository->findById(1);
        $this->assertNotNull($user);
        $this->assertEquals('daniel@maggio.com', $user->getEmail());
    }

    /**
     * @param InMemoryEventBus $eventBus
     * @return void
     */
    public function assertEventWasPublished(InMemoryEventBus $eventBus): void
    {
        $publishedEvents = $eventBus->pullEvents();
        $this->assertEquals(1, count($publishedEvents));
        $this->assertEquals('UserCreated', $publishedEvents[0]['name']);
    }
}
