<?php

namespace ContainerDvz89GO;

return [
    'Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController' => true,
    'Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider' => true,
    'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
    'Doctrine\\DBAL\\Connection' => true,
    'Doctrine\\DBAL\\Connection $defaultConnection' => true,
    'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => true,
    'Doctrine\\ORM\\EntityManagerInterface' => true,
    'Doctrine\\ORM\\EntityManagerInterface $defaultEntityManager' => true,
    'Doctrine\\Persistence\\ManagerRegistry' => true,
    'Leadtech\\Application\\User\\RegisterUseCase' => true,
    'Leadtech\\Application\\User\\UserCreated' => true,
    'Leadtech\\Domain\\DTO\\User\\UserRegisterDTO' => true,
    'Leadtech\\Domain\\Entity\\User' => true,
    'Leadtech\\Domain\\Events\\UserCreatedEvent' => true,
    'Leadtech\\Domain\\Exceptions\\EmailNotValidException' => true,
    'Leadtech\\Domain\\Exceptions\\UserNameTooLongException' => true,
    'Leadtech\\Domain\\Interfaces\\DomainEventInterface' => true,
    'Leadtech\\Domain\\Interfaces\\EventBusInterface' => true,
    'Leadtech\\Domain\\Interfaces\\Notificator\\UserNotificatorInterface' => true,
    'Leadtech\\Domain\\Interfaces\\User\\UserRepositoryInterface' => true,
    'Leadtech\\Domain\\VO\\Shared\\EmailVO' => true,
    'Leadtech\\Domain\\VO\\User\\NameVO' => true,
    'Leadtech\\Infrastructure\\EventBus\\InMemoryEventBus' => true,
    'Leadtech\\Infrastructure\\EventBus\\MysqlEventBus' => true,
    'Leadtech\\Infrastructure\\Notificator\\EmailNotificator' => true,
    'Leadtech\\Infrastructure\\Repository\\User\\InMemoryRepository\\UserRepository' => true,
    'Leadtech\\Infrastructure\\Repository\\User\\MysqlRepository\\UserRepository' => true,
    'Psr\\Cache\\CacheItemPoolInterface' => true,
    'Psr\\Clock\\ClockInterface' => true,
    'Psr\\Container\\ContainerInterface $parameterBag' => true,
    'Psr\\EventDispatcher\\EventDispatcherInterface' => true,
    'Psr\\Log\\LoggerInterface' => true,
    'Psr\\Log\\LoggerInterface $cacheLogger' => true,
    'Psr\\Log\\LoggerInterface $consoleLogger' => true,
    'Psr\\Log\\LoggerInterface $doctrineLogger' => true,
    'Psr\\Log\\LoggerInterface $messengerLogger' => true,
    'Psr\\Log\\LoggerInterface $phpLogger' => true,
    'Psr\\Log\\LoggerInterface $requestLogger' => true,
    'Psr\\Log\\LoggerInterface $routerLogger' => true,
    'SessionHandlerInterface' => true,
    'Symfony\\Component\\Clock\\ClockInterface' => true,
    'Symfony\\Component\\Config\\Loader\\LoaderInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ReverseContainer' => true,
    'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\FileLinkFormatter' => true,
    'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => true,
    'Symfony\\Component\\Filesystem\\Filesystem' => true,
    'Symfony\\Component\\Form\\FormFactoryInterface' => true,
    'Symfony\\Component\\Form\\FormRegistryInterface' => true,
    'Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface' => true,
    'Symfony\\Component\\HttpFoundation\\Request' => true,
    'Symfony\\Component\\HttpFoundation\\RequestStack' => true,
    'Symfony\\Component\\HttpFoundation\\Response' => true,
    'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => true,
    'Symfony\\Component\\HttpFoundation\\UriSigner' => true,
    'Symfony\\Component\\HttpFoundation\\UrlHelper' => true,
    'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => true,
    'Symfony\\Component\\HttpKernel\\Fragment\\FragmentUriGeneratorInterface' => true,
    'Symfony\\Component\\HttpKernel\\HttpCache\\StoreInterface' => true,
    'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => true,
    'Symfony\\Component\\HttpKernel\\KernelInterface' => true,
    'Symfony\\Component\\Messenger\\MessageBusInterface' => true,
    'Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyReadInfoExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface' => true,
    'Symfony\\Component\\PropertyInfo\\PropertyWriteInfoExtractorInterface' => true,
    'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => true,
    'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => true,
    'Symfony\\Component\\Routing\\RequestContext' => true,
    'Symfony\\Component\\Routing\\RequestContextAwareInterface' => true,
    'Symfony\\Component\\Routing\\RouterInterface' => true,
    'Symfony\\Component\\String\\Slugger\\SluggerInterface' => true,
    'Symfony\\Contracts\\Cache\\CacheInterface' => true,
    'Symfony\\Contracts\\Cache\\TagAwareCacheInterface' => true,
    'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => true,
    'argument_metadata_factory' => true,
    'argument_resolver' => true,
    'argument_resolver.backed_enum_resolver' => true,
    'argument_resolver.controller_locator' => true,
    'argument_resolver.datetime' => true,
    'argument_resolver.default' => true,
    'argument_resolver.query_parameter_value_resolver' => true,
    'argument_resolver.request' => true,
    'argument_resolver.request_attribute' => true,
    'argument_resolver.request_payload' => true,
    'argument_resolver.service' => true,
    'argument_resolver.session' => true,
    'argument_resolver.variadic' => true,
    'cache.adapter.apcu' => true,
    'cache.adapter.array' => true,
    'cache.adapter.doctrine_dbal' => true,
    'cache.adapter.filesystem' => true,
    'cache.adapter.memcached' => true,
    'cache.adapter.pdo' => true,
    'cache.adapter.psr6' => true,
    'cache.adapter.redis' => true,
    'cache.adapter.redis_tag_aware' => true,
    'cache.adapter.system' => true,
    'cache.app.taggable' => true,
    'cache.default_clearer' => true,
    'cache.default_doctrine_dbal_provider' => true,
    'cache.default_marshaller' => true,
    'cache.default_memcached_provider' => true,
    'cache.default_redis_provider' => true,
    'cache.doctrine.orm.default.metadata' => true,
    'cache.doctrine.orm.default.query' => true,
    'cache.doctrine.orm.default.result' => true,
    'cache.early_expiration_handler' => true,
    'cache.messenger.restart_workers_signal' => true,
    'cache.property_access' => true,
    'cache.property_info' => true,
    'cache.serializer' => true,
    'cache.validator' => true,
    'cache_clearer' => true,
    'clock' => true,
    'config.resource.self_checking_resource_checker' => true,
    'config_builder.warmer' => true,
    'config_cache_factory' => true,
    'console.command.about' => true,
    'console.command.assets_install' => true,
    'console.command.cache_clear' => true,
    'console.command.cache_pool_clear' => true,
    'console.command.cache_pool_delete' => true,
    'console.command.cache_pool_invalidate_tags' => true,
    'console.command.cache_pool_list' => true,
    'console.command.cache_pool_prune' => true,
    'console.command.cache_warmup' => true,
    'console.command.config_debug' => true,
    'console.command.config_dump_reference' => true,
    'console.command.container_debug' => true,
    'console.command.container_lint' => true,
    'console.command.debug_autowiring' => true,
    'console.command.dotenv_debug' => true,
    'console.command.event_dispatcher_debug' => true,
    'console.command.form_debug' => true,
    'console.command.messenger_consume_messages' => true,
    'console.command.messenger_debug' => true,
    'console.command.messenger_setup_transports' => true,
    'console.command.messenger_stats' => true,
    'console.command.messenger_stop_workers' => true,
    'console.command.router_debug' => true,
    'console.command.router_match' => true,
    'console.command.secrets_decrypt_to_local' => true,
    'console.command.secrets_encrypt_from_local' => true,
    'console.command.secrets_generate_key' => true,
    'console.command.secrets_list' => true,
    'console.command.secrets_remove' => true,
    'console.command.secrets_set' => true,
    'console.command.yaml_lint' => true,
    'console.error_listener' => true,
    'console.messenger.application' => true,
    'console.messenger.execute_command_handler' => true,
    'console.suggest_missing_package_subscriber' => true,
    'container.env' => true,
    'container.env_var_processor' => true,
    'container.getenv' => true,
    'controller.cache_attribute_listener' => true,
    'controller_resolver' => true,
    'data_collector.doctrine' => true,
    'debug.debug_handlers_listener' => true,
    'debug.debug_logger_configurator' => true,
    'debug.file_link_formatter' => true,
    'debug.log_processor' => true,
    'dependency_injection.config.container_parameters_resource_checker' => true,
    'disallow_search_engine_index_response_listener' => true,
    'doctrine.cache_clear_metadata_command' => true,
    'doctrine.cache_clear_query_cache_command' => true,
    'doctrine.cache_clear_result_command' => true,
    'doctrine.cache_collection_region_command' => true,
    'doctrine.clear_entity_region_command' => true,
    'doctrine.clear_query_region_command' => true,
    'doctrine.database_create_command' => true,
    'doctrine.database_drop_command' => true,
    'doctrine.dbal.connection' => true,
    'doctrine.dbal.connection.configuration' => true,
    'doctrine.dbal.connection.event_manager' => true,
    'doctrine.dbal.connection_factory' => true,
    'doctrine.dbal.connection_factory.dsn_parser' => true,
    'doctrine.dbal.debug_middleware' => true,
    'doctrine.dbal.debug_middleware.default' => true,
    'doctrine.dbal.default_connection.configuration' => true,
    'doctrine.dbal.default_connection.event_manager' => true,
    'doctrine.dbal.default_schema_manager_factory' => true,
    'doctrine.dbal.event_manager' => true,
    'doctrine.dbal.legacy_schema_manager_factory' => true,
    'doctrine.dbal.logging_middleware' => true,
    'doctrine.dbal.logging_middleware.default' => true,
    'doctrine.dbal.schema_asset_filter_manager' => true,
    'doctrine.dbal.well_known_schema_asset_filter' => true,
    'doctrine.debug_data_holder' => true,
    'doctrine.id_generator_locator' => true,
    'doctrine.mapping_info_command' => true,
    'doctrine.orm.command.entity_manager_provider' => true,
    'doctrine.orm.configuration' => true,
    'doctrine.orm.container_repository_factory' => true,
    'doctrine.orm.default_configuration' => true,
    'doctrine.orm.default_entity_listener_resolver' => true,
    'doctrine.orm.default_entity_manager.event_manager' => true,
    'doctrine.orm.default_entity_manager.property_info_extractor' => true,
    'doctrine.orm.default_listeners.attach_entity_listeners' => true,
    'doctrine.orm.default_manager_configurator' => true,
    'doctrine.orm.default_metadata_cache' => true,
    'doctrine.orm.default_metadata_driver' => true,
    'doctrine.orm.default_query_cache' => true,
    'doctrine.orm.default_result_cache' => true,
    'doctrine.orm.default_xml_metadata_driver' => true,
    'doctrine.orm.entity_manager.abstract' => true,
    'doctrine.orm.entity_value_resolver' => true,
    'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener' => true,
    'doctrine.orm.listeners.doctrine_token_provider_schema_listener' => true,
    'doctrine.orm.listeners.lock_store_schema_listener' => true,
    'doctrine.orm.listeners.pdo_session_handler_schema_listener' => true,
    'doctrine.orm.listeners.resolve_target_entity' => true,
    'doctrine.orm.manager_configurator.abstract' => true,
    'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' => true,
    'doctrine.orm.naming_strategy.default' => true,
    'doctrine.orm.naming_strategy.underscore' => true,
    'doctrine.orm.naming_strategy.underscore_number_aware' => true,
    'doctrine.orm.proxy_cache_warmer' => true,
    'doctrine.orm.quote_strategy.ansi' => true,
    'doctrine.orm.quote_strategy.default' => true,
    'doctrine.orm.security.user.provider' => true,
    'doctrine.orm.validator.unique' => true,
    'doctrine.orm.validator_initializer' => true,
    'doctrine.query_dql_command' => true,
    'doctrine.query_sql_command' => true,
    'doctrine.schema_create_command' => true,
    'doctrine.schema_drop_command' => true,
    'doctrine.schema_update_command' => true,
    'doctrine.schema_validate_command' => true,
    'doctrine.twig.doctrine_extension' => true,
    'doctrine.ulid_generator' => true,
    'doctrine.uuid_generator' => true,
    'error_handler.error_renderer.html' => true,
    'error_renderer' => true,
    'error_renderer.html' => true,
    'exception_listener' => true,
    'file_locator' => true,
    'filesystem' => true,
    'form.choice_list_factory' => true,
    'form.choice_list_factory.cached' => true,
    'form.choice_list_factory.default' => true,
    'form.choice_list_factory.property_access' => true,
    'form.extension' => true,
    'form.factory' => true,
    'form.property_accessor' => true,
    'form.registry' => true,
    'form.resolved_type_factory' => true,
    'form.server_params' => true,
    'form.type.choice' => true,
    'form.type.color' => true,
    'form.type.entity' => true,
    'form.type.file' => true,
    'form.type.form' => true,
    'form.type_extension.form.http_foundation' => true,
    'form.type_extension.form.request_handler' => true,
    'form.type_extension.form.transformation_failure_handling' => true,
    'form.type_extension.repeated.validator' => true,
    'form.type_extension.submit.validator' => true,
    'form.type_guesser.doctrine' => true,
    'fragment.handler' => true,
    'fragment.renderer.inline' => true,
    'fragment.uri_generator' => true,
    'http_cache' => true,
    'http_cache.store' => true,
    'locale_aware_listener' => true,
    'locale_listener' => true,
    'logger' => true,
    'messenger.bus.default' => true,
    'messenger.bus.default.messenger.handlers_locator' => true,
    'messenger.bus.default.middleware.add_bus_name_stamp_middleware' => true,
    'messenger.bus.default.middleware.handle_message' => true,
    'messenger.bus.default.middleware.send_message' => true,
    'messenger.default_serializer' => true,
    'messenger.failure.add_error_details_stamp_listener' => true,
    'messenger.listener.dispatch_pcntl_signal_listener' => true,
    'messenger.listener.reset_services' => true,
    'messenger.listener.stop_worker_on_restart_signal_listener' => true,
    'messenger.listener.stop_worker_on_stop_exception_listener' => true,
    'messenger.middleware.add_bus_name_stamp_middleware' => true,
    'messenger.middleware.dispatch_after_current_bus' => true,
    'messenger.middleware.doctrine_close_connection' => true,
    'messenger.middleware.doctrine_open_transaction_logger' => true,
    'messenger.middleware.doctrine_ping_connection' => true,
    'messenger.middleware.doctrine_transaction' => true,
    'messenger.middleware.failed_message_processing_middleware' => true,
    'messenger.middleware.handle_message' => true,
    'messenger.middleware.reject_redelivered_message_middleware' => true,
    'messenger.middleware.router_context' => true,
    'messenger.middleware.send_message' => true,
    'messenger.middleware.traceable' => true,
    'messenger.middleware.validation' => true,
    'messenger.receiver_locator' => true,
    'messenger.redispatch_message_handler' => true,
    'messenger.retry.abstract_multiplier_retry_strategy' => true,
    'messenger.retry.send_failed_message_for_retry_listener' => true,
    'messenger.retry_strategy_locator' => true,
    'messenger.routable_message_bus' => true,
    'messenger.senders_locator' => true,
    'messenger.transport.in_memory.factory' => true,
    'messenger.transport.native_php_serializer' => true,
    'messenger.transport.sync.factory' => true,
    'messenger.transport_factory' => true,
    'monolog.activation_strategy.not_found' => true,
    'monolog.formatter.chrome_php' => true,
    'monolog.formatter.gelf_message' => true,
    'monolog.formatter.html' => true,
    'monolog.formatter.json' => true,
    'monolog.formatter.line' => true,
    'monolog.formatter.loggly' => true,
    'monolog.formatter.logstash' => true,
    'monolog.formatter.normalizer' => true,
    'monolog.formatter.scalar' => true,
    'monolog.formatter.wildfire' => true,
    'monolog.handler.fingers_crossed.error_level_activation_strategy' => true,
    'monolog.handler.null_internal' => true,
    'monolog.http_client' => true,
    'monolog.logger' => true,
    'monolog.logger.cache' => true,
    'monolog.logger.console' => true,
    'monolog.logger.doctrine' => true,
    'monolog.logger.messenger' => true,
    'monolog.logger.php' => true,
    'monolog.logger.request' => true,
    'monolog.logger.router' => true,
    'monolog.logger_prototype' => true,
    'parameter_bag' => true,
    'property_accessor' => true,
    'property_info' => true,
    'property_info.reflection_extractor' => true,
    'response_listener' => true,
    'reverse_container' => true,
    'router.cache_warmer' => true,
    'router.default' => true,
    'router.request_context' => true,
    'router_listener' => true,
    'routing.loader.attribute' => true,
    'routing.loader.attribute.directory' => true,
    'routing.loader.attribute.file' => true,
    'routing.loader.container' => true,
    'routing.loader.directory' => true,
    'routing.loader.glob' => true,
    'routing.loader.php' => true,
    'routing.loader.psr4' => true,
    'routing.loader.xml' => true,
    'routing.loader.yml' => true,
    'routing.resolver' => true,
    'secrets.decryption_key' => true,
    'secrets.local_vault' => true,
    'secrets.vault' => true,
    'session.abstract_handler' => true,
    'session.factory' => true,
    'session.handler' => true,
    'session.handler.native' => true,
    'session.handler.native_file' => true,
    'session.marshaller' => true,
    'session.marshalling_handler' => true,
    'session.storage.factory' => true,
    'session.storage.factory.mock_file' => true,
    'session.storage.factory.native' => true,
    'session.storage.factory.php_bridge' => true,
    'session_listener' => true,
    'slugger' => true,
    'uri_signer' => true,
    'url_helper' => true,
    'validate_request_listener' => true,
];
