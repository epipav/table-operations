<?php

namespace ContainerFawzvZL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_InPlacePagerPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_elastica.in_place_pager_persister' shared service.
     *
     * @return \FOS\ElasticaBundle\Persister\InPlacePagerPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/PagerPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/InPlacePagerPersister.php';

        return $container->services['fos_elastica.in_place_pager_persister'] = new \FOS\ElasticaBundle\Persister\InPlacePagerPersister(($container->services['fos_elastica.persister_registry'] ?? $container->load('getFosElastica_PersisterRegistryService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
