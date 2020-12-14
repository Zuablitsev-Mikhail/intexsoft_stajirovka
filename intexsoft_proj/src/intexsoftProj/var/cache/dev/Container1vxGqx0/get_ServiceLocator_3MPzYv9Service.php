<?php

namespace Container1vxGqx0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3MPzYv9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3MPzYv9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3MPzYv9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'personalDataRepository' => ['privates', 'App\\Repository\\PersonalDataRepository', 'getPersonalDataRepositoryService', true],
        ], [
            'personalDataRepository' => 'App\\Repository\\PersonalDataRepository',
        ]);
    }
}
