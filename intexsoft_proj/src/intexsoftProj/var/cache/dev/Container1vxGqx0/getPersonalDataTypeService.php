<?php

namespace Container1vxGqx0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersonalDataTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\PersonalDataType' shared autowired service.
     *
     * @return \App\Form\PersonalDataType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/PersonalDataType.php';

        return $container->privates['App\\Form\\PersonalDataType'] = new \App\Form\PersonalDataType();
    }
}
