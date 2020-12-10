<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerUyvMD8c/App_KernelDevDebugContainer.php';
require __DIR__.'/ContainerUyvMD8c/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/ContainerUyvMD8c/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/ContainerUyvMD8c/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/ContainerUyvMD8c/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerUyvMD8c/getValidator_ExpressionService.php';
require __DIR__.'/ContainerUyvMD8c/getValidator_EmailService.php';
require __DIR__.'/ContainerUyvMD8c/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerUyvMD8c/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerUyvMD8c/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerUyvMD8c/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerUyvMD8c/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerUyvMD8c/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerUyvMD8c/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerUyvMD8c/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerUyvMD8c/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerUyvMD8c/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerUyvMD8c/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerUyvMD8c/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerUyvMD8c/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerUyvMD8c/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerUyvMD8c/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerUyvMD8c/getSession_Storage_NativeService.php';
require __DIR__.'/ContainerUyvMD8c/getSessionService.php';
require __DIR__.'/ContainerUyvMD8c/getServicesResetterService.php';
require __DIR__.'/ContainerUyvMD8c/getSerializer_Mapping_CacheClassMetadataFactoryService.php';
require __DIR__.'/ContainerUyvMD8c/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerUyvMD8c/getSecurity_PasswordEncoderService.php';
require __DIR__.'/ContainerUyvMD8c/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerUyvMD8c/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerUyvMD8c/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerUyvMD8c/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerUyvMD8c/getSecurity_ContextListener_0Service.php';
require __DIR__.'/ContainerUyvMD8c/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerUyvMD8c/getSecurity_Authentication_Listener_Anonymous_MainService.php';
require __DIR__.'/ContainerUyvMD8c/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerUyvMD8c/getSecrets_VaultService.php';
require __DIR__.'/ContainerUyvMD8c/getRouting_LoaderService.php';
require __DIR__.'/ContainerUyvMD8c/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerUyvMD8c/getPropertyAccessorService.php';
require __DIR__.'/ContainerUyvMD8c/getMonolog_Logger_SecurityService.php';
require __DIR__.'/ContainerUyvMD8c/getMimeTypesService.php';
require __DIR__.'/ContainerUyvMD8c/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_TypeExtension_Upload_ValidatorService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_TypeExtension_Form_TransformationFailureHandlingService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_TypeExtension_Form_DataCollectorService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_Type_FormService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_Type_EntityService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_Type_ColorService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_ServerParamsService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_RegistryService.php';
require __DIR__.'/ContainerUyvMD8c/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerUyvMD8c/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerUyvMD8c/getErrorControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerUyvMD8c/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerUyvMD8c/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_Security_Voter_Security_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerUyvMD8c/getDataCollector_Request_SessionCollectorService.php';
require __DIR__.'/ContainerUyvMD8c/getContainer_GetenvService.php';
require __DIR__.'/ContainerUyvMD8c/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerUyvMD8c/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerUyvMD8c/getCache_SystemClearerService.php';
require __DIR__.'/ContainerUyvMD8c/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerUyvMD8c/getCache_AppClearerService.php';
require __DIR__.'/ContainerUyvMD8c/getAnnotations_CacheService.php';
require __DIR__.'/ContainerUyvMD8c/getTemplateControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getRedirectControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getUserRepositoryService.php';
require __DIR__.'/ContainerUyvMD8c/getTechnicalExperienceRepositoryService.php';
require __DIR__.'/ContainerUyvMD8c/getSpokenLanguagesRepositoryService.php';
require __DIR__.'/ContainerUyvMD8c/getSkillsRepositoryService.php';
require __DIR__.'/ContainerUyvMD8c/getProjectRolesRepositoryService.php';
require __DIR__.'/ContainerUyvMD8c/getProjectRepositoryService.php';
require __DIR__.'/ContainerUyvMD8c/getPersonalDataRepositoryService.php';
require __DIR__.'/ContainerUyvMD8c/getLanguagesRepositoryService.php';
require __DIR__.'/ContainerUyvMD8c/getEducationRepositoryService.php';
require __DIR__.'/ContainerUyvMD8c/getCategoriesRepositoryService.php';
require __DIR__.'/ContainerUyvMD8c/getCareerSummaryRepositoryService.php';
require __DIR__.'/ContainerUyvMD8c/getUserTypeService.php';
require __DIR__.'/ContainerUyvMD8c/getTechnicalExperienceTypeService.php';
require __DIR__.'/ContainerUyvMD8c/getSpokenLanguagesTypeService.php';
require __DIR__.'/ContainerUyvMD8c/getSkillsTypeService.php';
require __DIR__.'/ContainerUyvMD8c/getProjectTypeService.php';
require __DIR__.'/ContainerUyvMD8c/getProjectRolesTypeService.php';
require __DIR__.'/ContainerUyvMD8c/getPersonalDataTypeService.php';
require __DIR__.'/ContainerUyvMD8c/getLanguagesTypeService.php';
require __DIR__.'/ContainerUyvMD8c/getEducationTypeService.php';
require __DIR__.'/ContainerUyvMD8c/getCategoriesTypeService.php';
require __DIR__.'/ContainerUyvMD8c/getCareerSummaryTypeService.php';
require __DIR__.'/ContainerUyvMD8c/getUserControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getTechnicalExperienceControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getSpokenLanguagesControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getSkillsControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getProjectRolesControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getProjectControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getPersonalDataControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getMainControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getLanguagesControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getEducationControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getCategoriesControllerService.php';
require __DIR__.'/ContainerUyvMD8c/getCareerSummaryControllerService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_Z8U9OQZService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_TgCfmNoService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_TYT9IXBService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_TWBFQtGService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_LFLtI47Service.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_JBKfg1kService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_Ik3A5tService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_Ga9SxLSService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_Ch4JgvlService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_A9xkZO5Service.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_PSL3DfService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_L4UoAGbService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_Jal_0gService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_GEpnwpBService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_E7MvU05Service.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_BRRKwYService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_BA9zviUService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_AXu1g1vService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_8P6TCotService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_6EItiidService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_5nX7ca3Service.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_4GXXyqoService.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator_3MPzYv9Service.php';
require __DIR__.'/ContainerUyvMD8c/get_ServiceLocator__Ae5NXwService.php';
require __DIR__.'/ContainerUyvMD8c/get_Container_Private_SerializerService.php';
require __DIR__.'/ContainerUyvMD8c/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerUyvMD8c/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerUyvMD8c/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerUyvMD8c/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerUyvMD8c/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\PropertyNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
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
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\WebLinkExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\DumpExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Validator\Validator\TraceableValidator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpClient\TraceableHttpClient';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'App\Controller\CareerSummaryController';
$classes[] = 'App\Controller\CategoriesController';
$classes[] = 'App\Controller\EducationController';
$classes[] = 'App\Controller\LanguagesController';
$classes[] = 'App\Controller\MainController';
$classes[] = 'App\Controller\PersonalDataController';
$classes[] = 'App\Controller\ProjectController';
$classes[] = 'App\Controller\ProjectRolesController';
$classes[] = 'App\Controller\SkillsController';
$classes[] = 'App\Controller\SpokenLanguagesController';
$classes[] = 'App\Controller\TechnicalExperienceController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Form\CareerSummaryType';
$classes[] = 'App\Form\CategoriesType';
$classes[] = 'App\Form\EducationType';
$classes[] = 'App\Form\LanguagesType';
$classes[] = 'App\Form\PersonalDataType';
$classes[] = 'App\Form\ProjectRolesType';
$classes[] = 'App\Form\ProjectType';
$classes[] = 'App\Form\SkillsType';
$classes[] = 'App\Form\SpokenLanguagesType';
$classes[] = 'App\Form\TechnicalExperienceType';
$classes[] = 'App\Form\UserType';
$classes[] = 'App\Repository\CareerSummaryRepository';
$classes[] = 'App\Repository\CategoriesRepository';
$classes[] = 'App\Repository\EducationRepository';
$classes[] = 'App\Repository\LanguagesRepository';
$classes[] = 'App\Repository\PersonalDataRepository';
$classes[] = 'App\Repository\ProjectRepository';
$classes[] = 'App\Repository\ProjectRolesRepository';
$classes[] = 'App\Repository\SkillsRepository';
$classes[] = 'App\Repository\SpokenLanguagesRepository';
$classes[] = 'App\Repository\TechnicalExperienceRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataExtractor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Bridge\Monolog\Processor\DebugProcessor';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
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
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mime\MimeTypes';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\Notifier\EventListener\NotificationLoggerListener';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\Validator\DataCollector\ValidatorDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Component\Translation\DataCollector\TranslationDataCollector';
$classes[] = 'Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Symfony\Component\Mailer\DataCollector\MessageDataCollector';
$classes[] = 'Symfony\Component\Notifier\DataCollector\NotificationDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
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
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Encoder\EncoderFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Encoder\UserPasswordEncoder';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Psr\Cache\CacheItemPoolInterface';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Translation\DataCollectorTranslator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\VarDumper\Server\Connection';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';

Preloader::preload($classes);
