<?php

namespace ContainerJqMblxo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_TemplateResetterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_elastica.template_resetter' shared service.
     *
     * @return \FOS\ElasticaBundle\Index\TemplateResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/ResetterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/TemplateResetter.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/MappingBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/IndexTemplateManager.php';

        return $container->services['fos_elastica.template_resetter'] = new \FOS\ElasticaBundle\Index\TemplateResetter(($container->services['fos_elastica.config_manager.index_templates'] ?? $container->load('getFosElastica_ConfigManager_IndexTemplatesService')), ($container->privates['fos_elastica.mapping_builder'] ?? ($container->privates['fos_elastica.mapping_builder'] = new \FOS\ElasticaBundle\Index\MappingBuilder())), ($container->services['fos_elastica.client.default'] ?? $container->load('getFosElastica_Client_DefaultService')), ($container->services['fos_elastica.index_template_manager'] ?? ($container->services['fos_elastica.index_template_manager'] = new \FOS\ElasticaBundle\Index\IndexTemplateManager([]))));
    }
}
