<?php

namespace Container2YjrWxR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6fHno7PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6fHno7P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6fHno7P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'course' => ['privates', '.errored..service_locator.6fHno7P.App\\Entity\\Courses', NULL, 'Cannot autowire service ".service_locator.6fHno7P": it needs an instance of "App\\Entity\\Courses" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'course' => 'App\\Entity\\Courses',
            'entityManager' => '?',
        ]);
    }
}
