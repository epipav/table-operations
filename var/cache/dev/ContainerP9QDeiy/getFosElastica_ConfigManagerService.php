<?php

namespace ContainerP9QDeiy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_ConfigManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_elastica.config_manager' shared service.
     *
     * @return \FOS\ElasticaBundle\Configuration\ConfigManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/ConfigManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/Source/SourceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/Source/ContainerSource.php';

        return $container->services['fos_elastica.config_manager'] = new \FOS\ElasticaBundle\Configuration\ConfigManager([0 => new \FOS\ElasticaBundle\Configuration\Source\ContainerSource(['app' => ['elasticsearch_name' => 'app', 'reference' => ($container->services['fos_elastica.index.app'] ?? $container->load('getFosElastica_Index_AppService')), 'name' => 'app', 'settings' => [], 'type_prototype' => [], 'use_alias' => false, 'types' => ['products' => ['name' => 'products', 'mapping' => ['dynamic_templates' => [], 'properties' => ['id' => [], 'gtin' => [], 'product_name' => [], 'product_desc' => [], 'price' => [], 'currency' => [], 'category' => [], 'gender' => [], 'quantity' => [], 'size' => [], 'color' => [], 'url' => [], 'image' => [], 'image_additional' => [], 'additional' => [], 'source_video' => []]], 'config' => ['persistence' => ['driver' => 'orm', 'model' => 'App\\Entity\\Product', 'identifier' => 'id', 'provider' => ['batch_size' => 100, 'clear_object_manager' => true, 'debug_logging' => true, 'query_builder_method' => 'createQueryBuilder'], 'listener' => ['enabled' => true, 'insert' => true, 'update' => true, 'delete' => true, 'flush' => true, 'defer' => false, 'logger' => false], 'finder' => [], 'elastica_to_model_transformer' => ['hints' => [], 'hydrate' => true, 'ignore_missing' => false, 'query_builder_method' => 'createQueryBuilder'], 'model_to_elastica_transformer' => [], 'persister' => []], 'serializer' => ['groups' => [], 'serialize_null' => false], 'analyzer' => NULL, 'search_analyzer' => NULL, 'dynamic' => NULL, 'date_detection' => NULL, 'dynamic_date_formats' => [], 'numeric_detection' => NULL]]]]])]);
    }
}
