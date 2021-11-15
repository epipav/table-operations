<?php

namespace ContainerP9QDeiy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_PagerProviderRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_elastica.pager_provider_registry' shared service.
     *
     * @return \FOS\ElasticaBundle\Provider\PagerProviderRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Provider/PagerProviderRegistry.php';

        $container->services['fos_elastica.pager_provider_registry'] = $instance = new \FOS\ElasticaBundle\Provider\PagerProviderRegistry(['app' => ['products' => 'fos_elastica.pager_provider.app.products']]);

        $instance->setContainer($container);

        return $instance;
    }
}
