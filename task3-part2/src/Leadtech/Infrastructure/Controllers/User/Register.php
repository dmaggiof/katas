<?php

namespace Leadtech\Infrastructure\Controllers\User;

use Leadtech\Application\User\RegisterUseCase;
use Leadtech\Domain\DTO\User\UserRegisterDTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class Register extends AbstractController
{
    #[Route('/register', name: 'user_registration')]
    public function registerAction(Request $request, RegisterUseCase $registerUseCase): JsonResponse
    {
        $userRegisterCommand = new UserRegisterDTO($request->getPayload()->get('name'), $request->getPayload()->get('email'));
        $registerUseCase->execute($userRegisterCommand);

        return $this->json('Usuario creado');
    }
}