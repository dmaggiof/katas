<?php

namespace Leadtech\Infrastructure\Repository\User\InMemoryRepository;

use Leadtech\Domain\Entity\User;
use Leadtech\Domain\Interfaces\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    private array $fakeData;
    public function __construct()
    {
        $this->fakeData = [];
    }

    public function findById(int $id): ?User
    {
        foreach ($this->fakeData as $model) {
            if ($model->getId() == $id) {
                return $model;
            }
        }
        return null;
    }

    public function findOneById(string $id): ?User
    {
        foreach ($this->fakeData as $model) {
            if ($model->getId() == $id) {
                return $model;
            }
        }
        return null;
    }

    public function save(User $user): void
    {
        $user->setId(count($this->fakeData)+1);
        $this->fakeData[$user->getId()] = $user;
    }
}