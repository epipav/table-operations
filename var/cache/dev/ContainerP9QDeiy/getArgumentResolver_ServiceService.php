<?php

namespace ContainerP9QDeiy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\LoginController::login' => ['privates', '.service_locator.0DChBnD', 'get_ServiceLocator_0DChBnDService', true],
            'App\\Controller\\TableController::getTable' => ['privates', '.service_locator.0DChBnD', 'get_ServiceLocator_0DChBnDService', true],
            'App\\Controller\\TableController::index' => ['privates', '.service_locator.0DChBnD', 'get_ServiceLocator_0DChBnDService', true],
            'App\\Controller\\TableController::search' => ['privates', '.service_locator.P6Sn0bh', 'get_ServiceLocator_P6Sn0bhService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\LoginController:login' => ['privates', '.service_locator.0DChBnD', 'get_ServiceLocator_0DChBnDService', true],
            'App\\Controller\\TableController:getTable' => ['privates', '.service_locator.0DChBnD', 'get_ServiceLocator_0DChBnDService', true],
            'App\\Controller\\TableController:index' => ['privates', '.service_locator.0DChBnD', 'get_ServiceLocator_0DChBnDService', true],
            'App\\Controller\\TableController:search' => ['privates', '.service_locator.P6Sn0bh', 'get_ServiceLocator_P6Sn0bhService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\LoginController::login' => '?',
            'App\\Controller\\TableController::getTable' => '?',
            'App\\Controller\\TableController::index' => '?',
            'App\\Controller\\TableController::search' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\LoginController:login' => '?',
            'App\\Controller\\TableController:getTable' => '?',
            'App\\Controller\\TableController:index' => '?',
            'App\\Controller\\TableController:search' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}