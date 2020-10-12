<?php

namespace ContainerFawzvZL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_RepositoryManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_elastica.repository_manager' shared service.
     *
     * @return \FOS\ElasticaBundle\Manager\RepositoryManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Manager/RepositoryManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Manager/RepositoryManager.php';

        $container->services['fos_elastica.repository_manager'] = $instance = new \FOS\ElasticaBundle\Manager\RepositoryManager();

        $instance->addType('app/products', ($container->services['fos_elastica.finder.app.products'] ?? $container->load('getFosElastica_Finder_App_ProductsService')));

        return $instance;
    }
}