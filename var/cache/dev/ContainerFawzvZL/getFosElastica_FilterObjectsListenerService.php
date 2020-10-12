<?php

namespace ContainerFawzvZL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_FilterObjectsListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_elastica.filter_objects_listener' shared service.
     *
     * @return \FOS\ElasticaBundle\Persister\Listener\FilterObjectsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/Listener/FilterObjectsListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Provider/IndexableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Provider/Indexable.php';

        return $container->services['fos_elastica.filter_objects_listener'] = new \FOS\ElasticaBundle\Persister\Listener\FilterObjectsListener(($container->privates['fos_elastica.indexable'] ?? ($container->privates['fos_elastica.indexable'] = new \FOS\ElasticaBundle\Provider\Indexable([]))));
    }
}
