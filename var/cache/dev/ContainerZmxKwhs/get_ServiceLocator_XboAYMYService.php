<?php

namespace ContainerZmxKwhs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XboAYMYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xboAYMY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xboAYMY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'certificate' => ['privates', '.errored..service_locator.xboAYMY.App\\Entity\\Certificate', NULL, 'Cannot autowire service ".service_locator.xboAYMY": it needs an instance of "App\\Entity\\Certificate" but this type has been excluded in "config/services.yaml".'],
        ], [
            'certificate' => 'App\\Entity\\Certificate',
        ]);
    }
}
