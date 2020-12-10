<?php

namespace ContainerX2Ic4OU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L4UoAGbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.L4UoAGb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.L4UoAGb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'languagesRepository' => ['privates', 'App\\Repository\\LanguagesRepository', 'getLanguagesRepositoryService', true],
        ], [
            'languagesRepository' => 'App\\Repository\\LanguagesRepository',
        ]);
    }
}
