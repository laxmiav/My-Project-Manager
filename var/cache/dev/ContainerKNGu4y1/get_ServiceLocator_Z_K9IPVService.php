<?php

namespace ContainerKNGu4y1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z_K9IPVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.z.K9IPV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z.K9IPV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'projet' => ['privates', '.errored..service_locator.z.K9IPV.App\\Entity\\Projets', NULL, 'Cannot autowire service ".service_locator.z.K9IPV": it needs an instance of "App\\Entity\\Projets" but this type has been excluded in "config/services.yaml".'],
        ], [
            'projet' => 'App\\Entity\\Projets',
        ]);
    }
}