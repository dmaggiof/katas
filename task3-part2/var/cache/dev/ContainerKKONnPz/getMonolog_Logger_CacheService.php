<?php

namespace ContainerKKONnPz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_CacheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['monolog.logger.cache'] = $instance = new \Monolog\Logger('cache');

        $instance->pushHandler(($container->privates['monolog.handler.null_internal'] ??= new \Monolog\Handler\NullHandler()));

        return $instance;
    }
}
