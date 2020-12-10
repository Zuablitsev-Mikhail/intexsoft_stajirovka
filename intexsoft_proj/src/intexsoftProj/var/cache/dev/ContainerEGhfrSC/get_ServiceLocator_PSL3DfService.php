<?php

namespace ContainerEGhfrSC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PSL3DfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PS_L3Df' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PS_L3Df'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'technicalExperience' => ['privates', '.errored..service_locator.PS_L3Df.App\\Entity\\TechnicalExperience', NULL, 'Cannot autowire service ".service_locator.PS_L3Df": it references class "App\\Entity\\TechnicalExperience" but no such service exists.'],
        ], [
            'technicalExperience' => 'App\\Entity\\TechnicalExperience',
        ]);
    }
}
