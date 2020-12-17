<?php

namespace Container1vxGqx0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JBKfg1kService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jBKfg1k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jBKfg1k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'educationRepository' => ['privates', 'App\\Repository\\EducationRepository', 'getEducationRepositoryService', true],
        ], [
            'educationRepository' => 'App\\Repository\\EducationRepository',
        ]);
    }
}