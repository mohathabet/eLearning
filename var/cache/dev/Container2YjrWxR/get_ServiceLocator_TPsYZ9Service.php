<?php

namespace Container2YjrWxR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TPsYZ9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t_PsYZ9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t_PsYZ9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'lesson' => ['privates', '.errored..service_locator.t_PsYZ9.App\\Entity\\Lessons', NULL, 'Cannot autowire service ".service_locator.t_PsYZ9": it needs an instance of "App\\Entity\\Lessons" but this type has been excluded in "config/services.yaml".'],
        ], [
            'lesson' => 'App\\Entity\\Lessons',
        ]);
    }
}
