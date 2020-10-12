<?php

namespace ContainerFawzvZL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_IndexManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_elastica.index_manager' shared service.
     *
     * @return \FOS\ElasticaBundle\Index\IndexManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/IndexManager.php';

        $a = ($container->services['fos_elastica.index.app'] ?? $container->load('getFosElastica_Index_AppService'));

        return $container->services['fos_elastica.index_manager'] = new \FOS\ElasticaBundle\Index\IndexManager(['app' => $a], $a);
    }
}
