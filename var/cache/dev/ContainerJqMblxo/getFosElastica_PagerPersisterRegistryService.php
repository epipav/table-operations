<?php

namespace ContainerJqMblxo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_PagerPersisterRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_elastica.pager_persister_registry' shared service.
     *
     * @return \FOS\ElasticaBundle\Persister\PagerPersisterRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/PagerPersisterRegistry.php';

        $container->services['fos_elastica.pager_persister_registry'] = $instance = new \FOS\ElasticaBundle\Persister\PagerPersisterRegistry(['in_place' => 'fos_elastica.in_place_pager_persister']);

        $instance->setContainer($container);

        return $instance;
    }
}
