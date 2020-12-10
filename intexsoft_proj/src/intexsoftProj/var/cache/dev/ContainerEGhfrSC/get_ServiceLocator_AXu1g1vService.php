<?php

namespace ContainerEGhfrSC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AXu1g1vService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AXu1g1v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AXu1g1v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'technicalExperienceRepository' => ['privates', 'App\\Repository\\TechnicalExperienceRepository', 'getTechnicalExperienceRepositoryService', true],
        ], [
            'technicalExperienceRepository' => 'App\\Repository\\TechnicalExperienceRepository',
        ]);
    }
}
