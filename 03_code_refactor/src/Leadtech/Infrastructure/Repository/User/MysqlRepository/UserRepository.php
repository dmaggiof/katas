<?php

namespace Leadtech\Infrastructure\Repository\User\MysqlRepository;

use Leadtech\Domain\Entity\User;
use Leadtech\Domain\Interfaces\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function save(User $user){}
}