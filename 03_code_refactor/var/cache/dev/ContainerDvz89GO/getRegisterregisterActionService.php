<?php

namespace ContainerDvz89GO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterregisterActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Mr.vkjJ.Leadtech\Infrastructure\Controllers\User\Register::registerAction()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Mr.vkjJ.Leadtech\\Infrastructure\\Controllers\\User\\Register::registerAction()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'registerUseCase' => ['privates', 'Leadtech\\Application\\User\\RegisterUseCase', 'getRegisterUseCaseService', true],
        ], [
            'registerUseCase' => 'Leadtech\\Application\\User\\RegisterUseCase',
        ]))->withContext('Leadtech\\Infrastructure\\Controllers\\User\\Register::registerAction()', $container);
    }
}
