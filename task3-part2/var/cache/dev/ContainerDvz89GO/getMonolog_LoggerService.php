<?php

namespace ContainerDvz89GO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_LoggerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['monolog.logger'] = $instance = new \Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($container->privates['monolog.handler.null_internal'] ??= new \Monolog\Handler\NullHandler()));

        return $instance;
    }
}
