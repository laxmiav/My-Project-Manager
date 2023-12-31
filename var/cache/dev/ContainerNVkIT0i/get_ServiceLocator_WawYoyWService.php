<?php

namespace ContainerNVkIT0i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WawYoyWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wawYoyW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wawYoyW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'projetsRepository' => ['privates', 'App\\Repository\\ProjetsRepository', 'getProjetsRepositoryService', true],
            'tasksRepository' => ['privates', 'App\\Repository\\TasksRepository', 'getTasksRepositoryService', true],
        ], [
            'projetsRepository' => 'App\\Repository\\ProjetsRepository',
            'tasksRepository' => 'App\\Repository\\TasksRepository',
        ]);
    }
}
