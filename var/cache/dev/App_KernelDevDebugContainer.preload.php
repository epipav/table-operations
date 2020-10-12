<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerFawzvZL/App_KernelDevDebugContainer.php';
require __DIR__.'/ContainerFawzvZL/getWebpackEncore_TagRendererService.php';
require __DIR__.'/ContainerFawzvZL/getWebpackEncore_ExceptionListenerService.php';
require __DIR__.'/ContainerFawzvZL/getWebpackEncore_EntrypointLookupCollectionService.php';
require __DIR__.'/ContainerFawzvZL/getWebpackEncore_EntrypointLookupDefaultService.php';
require __DIR__.'/ContainerFawzvZL/getVarDumper_ServerConnectionService.php';
require __DIR__.'/ContainerFawzvZL/getVarDumper_HtmlDumperService.php';
require __DIR__.'/ContainerFawzvZL/getVarDumper_ClonerService.php';
require __DIR__.'/ContainerFawzvZL/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerFawzvZL/getTwigService.php';
require __DIR__.'/ContainerFawzvZL/getSession_Storage_NativeService.php';
require __DIR__.'/ContainerFawzvZL/getSessionService.php';
require __DIR__.'/ContainerFawzvZL/getServicesResetterService.php';
require __DIR__.'/ContainerFawzvZL/getSecrets_VaultService.php';
require __DIR__.'/ContainerFawzvZL/getRouting_LoaderService.php';
require __DIR__.'/ContainerFawzvZL/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_TemplateResetterService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_ResetterService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_RepositoryManagerService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_PopulateListenerService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_PersisterRegistryService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_Paginator_SubscriberService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_PagerProviderRegistryService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_PagerProvider_App_ProductsService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_PagerPersisterRegistryService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_ObjectPersister_App_ProductsService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_Manager_OrmService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_Listener_App_ProductsService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_IndexTemplateManagerService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_IndexManagerService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_Index_App_ProductsService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_Index_AppService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_InPlacePagerPersisterService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_Finder_App_ProductsService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_FilterObjectsListenerService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_ConfigManager_IndexTemplatesService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_ConfigManagerService.php';
require __DIR__.'/ContainerFawzvZL/getFosElastica_Client_DefaultService.php';
require __DIR__.'/ContainerFawzvZL/getFilesystemService.php';
require __DIR__.'/ContainerFawzvZL/getErrorControllerService.php';
require __DIR__.'/ContainerFawzvZL/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerFawzvZL/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerFawzvZL/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerFawzvZL/getDataCollector_DumpService.php';
require __DIR__.'/ContainerFawzvZL/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerFawzvZL/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerFawzvZL/getCacheClearerService.php';
require __DIR__.'/ContainerFawzvZL/getCache_SystemClearerService.php';
require __DIR__.'/ContainerFawzvZL/getCache_SystemService.php';
require __DIR__.'/ContainerFawzvZL/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerFawzvZL/getCache_AppClearerService.php';
require __DIR__.'/ContainerFawzvZL/getCache_AppService.php';
require __DIR__.'/ContainerFawzvZL/getCache_AnnotationsService.php';
require __DIR__.'/ContainerFawzvZL/getAssets_PackagesService.php';
require __DIR__.'/ContainerFawzvZL/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerFawzvZL/getAnnotations_CacheService.php';
require __DIR__.'/ContainerFawzvZL/getTemplateControllerService.php';
require __DIR__.'/ContainerFawzvZL/getRedirectControllerService.php';
require __DIR__.'/ContainerFawzvZL/getProductRepositoryService.php';
require __DIR__.'/ContainerFawzvZL/getTableControllerService.php';
require __DIR__.'/ContainerFawzvZL/getLoginControllerService.php';
require __DIR__.'/ContainerFawzvZL/getHomeControllerService.php';
require __DIR__.'/ContainerFawzvZL/get_ServiceLocator_Beq5mCoService.php';
require __DIR__.'/ContainerFawzvZL/get_ServiceLocator_P6Sn0bhService.php';
require __DIR__.'/ContainerFawzvZL/get_ServiceLocator_OzxxzzjService.php';
require __DIR__.'/ContainerFawzvZL/get_ServiceLocator_C9JCBPCService.php';
require __DIR__.'/ContainerFawzvZL/get_ServiceLocator_0DChBnDService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\WebpackEncoreBundle\WebpackEncoreBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'FOS\ElasticaBundle\FOSElasticaBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\HomeController';
$classes[] = 'App\Controller\LoginController';
$classes[] = 'App\Controller\TableController';
$classes[] = 'App\Repository\ProductRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'FOS\ElasticaBundle\Index\AliasProcessor';
$classes[] = 'FOS\ElasticaBundle\Elastica\Client';
$classes[] = 'FOS\ElasticaBundle\Logger\ElasticaLogger';
$classes[] = 'FOS\ElasticaBundle\Configuration\ConfigManager';
$classes[] = 'FOS\ElasticaBundle\Configuration\Source\ContainerSource';
$classes[] = 'FOS\ElasticaBundle\Configuration\Source\TemplateContainerSource';
$classes[] = 'FOS\ElasticaBundle\Persister\Listener\FilterObjectsListener';
$classes[] = 'FOS\ElasticaBundle\Finder\TransformedFinder';
$classes[] = 'FOS\ElasticaBundle\Doctrine\ORM\ElasticaToModelTransformer';
$classes[] = 'FOS\ElasticaBundle\Persister\InPlacePagerPersister';
$classes[] = 'FOS\ElasticaBundle\Elastica\Index';
$classes[] = 'Elastica\Type';
$classes[] = 'FOS\ElasticaBundle\Index\IndexManager';
$classes[] = 'FOS\ElasticaBundle\Index\IndexTemplateManager';
$classes[] = 'FOS\ElasticaBundle\Provider\Indexable';
$classes[] = 'FOS\ElasticaBundle\Doctrine\Listener';
$classes[] = 'FOS\ElasticaBundle\Doctrine\RepositoryManager';
$classes[] = 'FOS\ElasticaBundle\Index\MappingBuilder';
$classes[] = 'FOS\ElasticaBundle\Persister\ObjectPersister';
$classes[] = 'FOS\ElasticaBundle\Transformer\ModelToElasticaAutoTransformer';
$classes[] = 'FOS\ElasticaBundle\Persister\PagerPersisterRegistry';
$classes[] = 'FOS\ElasticaBundle\Doctrine\ORMPagerProvider';
$classes[] = 'FOS\ElasticaBundle\Doctrine\RegisterListenersService';
$classes[] = 'FOS\ElasticaBundle\Provider\PagerProviderRegistry';
$classes[] = 'FOS\ElasticaBundle\Subscriber\PaginateElasticaQuerySubscriber';
$classes[] = 'FOS\ElasticaBundle\Persister\PersisterRegistry';
$classes[] = 'FOS\ElasticaBundle\EventListener\PopulateListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'FOS\ElasticaBundle\Manager\RepositoryManager';
$classes[] = 'FOS\ElasticaBundle\Index\Resetter';
$classes[] = 'FOS\ElasticaBundle\Index\TemplateResetter';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\DumpExtension';
$classes[] = 'Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Symfony\Component\VarDumper\Server\Connection';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookup';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection';
$classes[] = 'Symfony\WebpackEncoreBundle\EventListener\ExceptionListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\TagRenderer';

Preloader::preload($classes);