<?php

namespace ContainerFawzvZL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_Index_AppService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_elastica.index.app' shared service.
     *
     * @return \FOS\ElasticaBundle\Elastica\Index
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/ruflin/elastica/lib/Elastica/SearchableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/ruflin/elastica/lib/Elastica/Index.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Elastica/Index.php';

        return $container->services['fos_elastica.index.app'] = ($container->services['fos_elastica.client.default'] ?? $container->load('getFosElastica_Client_DefaultService'))->getIndex('app');
    }
}