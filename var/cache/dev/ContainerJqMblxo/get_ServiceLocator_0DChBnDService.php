<?php

namespace ContainerJqMblxo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0DChBnDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0DChBnD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0DChBnD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'connection' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', true],
        ], [
            'connection' => '?',
        ]);
    }
}
