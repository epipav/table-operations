<?php

namespace ContainerJqMblxo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_IndexTemplateManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_elastica.index_template_manager' shared service.
     *
     * @return \FOS\ElasticaBundle\Index\IndexTemplateManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/IndexTemplateManager.php';

        return $container->services['fos_elastica.index_template_manager'] = new \FOS\ElasticaBundle\Index\IndexTemplateManager([]);
    }
}