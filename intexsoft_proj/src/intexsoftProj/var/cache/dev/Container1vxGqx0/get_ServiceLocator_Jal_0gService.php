<?php

namespace Container1vxGqx0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jal_0gService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jal.0g_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jal.0g_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'projectRole' => ['privates', '.errored..service_locator.Jal.0g_.App\\Entity\\ProjectRoles', NULL, 'Cannot autowire service ".service_locator.Jal.0g_": it references class "App\\Entity\\ProjectRoles" but no such service exists.'],
        ], [
            'projectRole' => 'App\\Entity\\ProjectRoles',
        ]);
    }
}
