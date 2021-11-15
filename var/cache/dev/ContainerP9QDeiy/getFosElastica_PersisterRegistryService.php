<?php

namespace ContainerP9QDeiy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_PersisterRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_elastica.persister_registry' shared service.
     *
     * @return \FOS\ElasticaBundle\Persister\PersisterRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/PersisterRegistry.php';

        $container->services['fos_elastica.persister_registry'] = $instance = new \FOS\ElasticaBundle\Persister\PersisterRegistry(['app' => ['products' => 'fos_elastica.object_persister.app.products']]);

        $instance->setContainer($container);

        return $instance;
    }
}
