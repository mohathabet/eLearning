<?php

namespace ContainerZmxKwhs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AIi1ctyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AIi1cty' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AIi1cty'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'lesson' => ['privates', '.errored..service_locator.AIi1cty.App\\Entity\\Lessons', NULL, 'Cannot autowire service ".service_locator.AIi1cty": it needs an instance of "App\\Entity\\Lessons" but this type has been excluded in "config/services.yaml".'],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'entityManager' => '?',
            'lesson' => 'App\\Entity\\Lessons',
            'slugger' => '?',
        ]);
    }
}
