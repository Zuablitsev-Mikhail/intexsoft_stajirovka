<?php

namespace Container8uqeIhd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E7MvU05Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E7MvU05' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E7MvU05'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.E7MvU05.App\\Entity\\Categories', NULL, 'Cannot autowire service ".service_locator.E7MvU05": it references class "App\\Entity\\Categories" but no such service exists.'],
        ], [
            'category' => 'App\\Entity\\Categories',
        ]);
    }
}
