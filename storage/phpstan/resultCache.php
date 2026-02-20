<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1771609862,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.39',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80401,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, level: 6, paths: [/home/marco-vega/Projects/laravel/saasbp/app, /home/marco-vega/Projects/laravel/saasbp/config, /home/marco-vega/Projects/laravel/saasbp/database, /home/marco-vega/Projects/laravel/saasbp/routes], tmpDir: /home/marco-vega/Projects/laravel/saasbp/storage/phpstan, treatPhpDocTypesAsCertain: false}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
  'analysedPaths' => 
  array (
    0 => '/home/marco-vega/Projects/laravel/saasbp/app',
    1 => '/home/marco-vega/Projects/laravel/saasbp/config',
    2 => '/home/marco-vega/Projects/laravel/saasbp/database',
    3 => '/home/marco-vega/Projects/laravel/saasbp/routes',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/home/marco-vega/Projects/laravel/saasbp/composer.lock' => 'bef89a33131ef673d10fc4e9041c66d430d955854ca0e3dc1ae722beef3533ed',
  ),
  'composerInstalled' => 
  array (
    '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'anourvalar/eloquent-serialize' => 
        array (
          'pretty_version' => '1.3.5',
          'version' => '1.3.5.0',
          'reference' => '1a7dead8d532657e5358f8f27c0349373517681e',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../anourvalar/eloquent-serialize',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'bacon/bacon-qr-code' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => '36a1cb2b81493fa5b82e50bf8068bf84d1542563',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../bacon/bacon-qr-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'blade-ui-kit/blade-heroicons' => 
        array (
          'pretty_version' => '2.6.0',
          'version' => '2.6.0.0',
          'reference' => '4553b2a1f6c76f0ac7f3bc0de4c0cfa06a097d19',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../blade-ui-kit/blade-heroicons',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'blade-ui-kit/blade-icons' => 
        array (
          'pretty_version' => '1.8.1',
          'version' => '1.8.1.0',
          'reference' => '47e7b6f43250e6404e4224db8229219cd42b543c',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../blade-ui-kit/blade-icons',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.19.0',
          'version' => '7.19.0.0',
          'reference' => '7c6c29af7c4b406b49ce0c6b0a3a81d3684474e6',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.8',
          'version' => '0.14.8.0',
          'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'danharrin/date-format-converter' => 
        array (
          'pretty_version' => 'v0.3.1',
          'version' => '0.3.1.0',
          'reference' => '7c31171bc981e48726729a5f3a05a2d2b63f0b1e',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../danharrin/date-format-converter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'danharrin/livewire-rate-limiting' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => '14dde653a9ae8f38af07a0ba4921dc046235e1a0',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../danharrin/livewire-rate-limiting',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dasprid/enum' => 
        array (
          'pretty_version' => '1.0.7',
          'version' => '1.0.7.0',
          'reference' => 'b5874fa9ed0043116c72162ec7f4fb50e02e7cce',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../dasprid/enum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/dbal' => 
        array (
          'pretty_version' => '4.4.1',
          'version' => '4.4.1.0',
          'reference' => '3d544473fb93f5c25b483ea4f4ce99f8c4d9d44c',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../doctrine/dbal',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.6',
          'version' => '1.1.6.0',
          'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'facade/ignition-contracts' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../facade/ignition-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filament/actions' => 
        array (
          'pretty_version' => 'v3.3.49',
          'version' => '3.3.49.0',
          'reference' => '3cb3e1f9094ed3b4bc102616966c365138c908bc',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../filament/actions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/filament' => 
        array (
          'pretty_version' => 'v3.3.49',
          'version' => '3.3.49.0',
          'reference' => '6098e568b4257dc438ff68aced0a260f06ba6d52',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../filament/filament',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/forms' => 
        array (
          'pretty_version' => 'v3.3.49',
          'version' => '3.3.49.0',
          'reference' => 'c64bf142f808d292b0c6c21fdd3c75cbef9e9d30',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../filament/forms',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/infolists' => 
        array (
          'pretty_version' => 'v3.3.49',
          'version' => '3.3.49.0',
          'reference' => '9cef7bf9f46756a8adf762ced62952e8c239b840',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../filament/infolists',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/notifications' => 
        array (
          'pretty_version' => 'v3.3.49',
          'version' => '3.3.49.0',
          'reference' => '3a6ef54b6a8cefc79858e7033e4d6b65fb2d859b',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../filament/notifications',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/support' => 
        array (
          'pretty_version' => 'v3.3.49',
          'version' => '3.3.49.0',
          'reference' => '493bd79d4f4ae7b9256c317af742354318a6f4e0',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../filament/support',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/tables' => 
        array (
          'pretty_version' => 'v3.3.49',
          'version' => '3.3.49.0',
          'reference' => 'fb0ab986950dc8129725f676bdb310851b18403f',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../filament/tables',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/widgets' => 
        array (
          'pretty_version' => 'v3.3.49',
          'version' => '3.3.49.0',
          'reference' => 'f58ff26e81ca2557205e3111e1d9d05c258cc206',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../filament/widgets',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.52.0',
          ),
        ),
        'inertiajs/inertia-laravel' => 
        array (
          'pretty_version' => 'v2.0.20',
          'version' => '2.0.20.0',
          'reference' => '02a719d1120378aed68053b5b2d35157140df50e',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../inertiajs/inertia-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kirschbaum-development/eloquent-power-joins' => 
        array (
          'pretty_version' => '4.2.11',
          'version' => '4.2.11.0',
          'reference' => '0e3e3372992e4bf82391b3c7b84b435c3db73588',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../kirschbaum-development/eloquent-power-joins',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.9.2',
          'version' => '3.9.2.0',
          'reference' => '2e9ed291bdc1969e7f270fb33c9cdf3c912daeb2',
          'type' => 'phpstan-extension',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/fortify' => 
        array (
          'pretty_version' => 'v1.34.1',
          'version' => '1.34.1.0',
          'reference' => '412575e9c0cb21d49a30b7045ad4902019f538c2',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/fortify',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.52.0',
          'version' => '12.52.0.0',
          'reference' => 'd5511fa74f4608dbb99864198b1954042aa8d5a7',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/horizon' => 
        array (
          'pretty_version' => 'v5.44.0',
          'version' => '5.44.0.0',
          'reference' => '00c21e4e768112cce3f4fe576d75956dfc423de2',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/horizon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/nightwatch' => 
        array (
          'pretty_version' => 'v1.22.3',
          'version' => '1.22.3.0',
          'reference' => '0831e31b56a932802eb5fea9c92e0931fd5093d5',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/nightwatch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.6',
          'version' => '1.2.6.0',
          'reference' => 'aa71a01c309e7f66bc2ec4fb1a59291b82eb4abf',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.27.1',
          'version' => '1.27.1.0',
          'reference' => '54cca2de13790570c7b6f0f94f37896bee4abcb5',
          'type' => 'project',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.13',
          'version' => '0.3.13.0',
          'reference' => 'ed8c466571b37e977532fb2fd3c272c784d7050d',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.53.0',
          'version' => '1.53.0.0',
          'reference' => 'e340eaa2bea9b99192570c48ed837155dbf24fbb',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.9',
          'version' => '2.0.9.0',
          'reference' => '8f631589ab07b7b52fead814965f5a800459cb3e',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.11.1',
          'version' => '2.11.1.0',
          'reference' => 'c9f80cc835649b5c1842898fb043f8cc098dd741',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/wayfinder' => 
        array (
          'pretty_version' => 'v0.1.13',
          'version' => '0.1.13.0',
          'reference' => 'cc32fedd4744cdb64d018974ce92296e88fcdd0f',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/wayfinder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '4efa10c1e56488e658d10adf7b7b7dcd19940bfb',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/csv' => 
        array (
          'pretty_version' => '9.28.0',
          'version' => '9.28.0.0',
          'reference' => '6582ace29ae09ba5b07049d40ea13eb19c8b5073',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../league/csv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '1717e0b3642b0df65ecb0cc89cdd99fa840672ff',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.0',
          'version' => '7.8.0.0',
          'reference' => '4436c6ec8d458e4244448b069cc572d088230b76',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.0',
          'version' => '7.8.0.0',
          'reference' => 'c5c5cd056110fc8afaba29fa6b72a43ced42acd4',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/livewire' => 
        array (
          'pretty_version' => 'v3.7.10',
          'version' => '3.7.10.0',
          'reference' => '0dc679eb4c8b4470cb12522b5927ef08ca2358bb',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../livewire/livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'masterminds/html5' => 
        array (
          'pretty_version' => '2.10.0',
          'version' => '2.10.0.0',
          'reference' => 'fcf91eb64359852f00d921887b219479b4f21251',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../masterminds/html5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.1',
          'version' => '3.11.1.0',
          'reference' => 'f438fcc98f92babee98381d399c65336f3a3827f',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.4',
          'version' => '1.3.4.0',
          'reference' => '086497a2f34b82fede9b5a41cc8e131d087cd8f7',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.3',
          'version' => '4.1.3.0',
          'reference' => 'bb3ea637e3d131d72acc033cfc2746ee893349fe',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.1',
          'version' => '8.9.1.0',
          'reference' => 'a1ed3fa530fd60bc515f9303e8520fcb7d4bd935',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'openspout/openspout' => 
        array (
          'pretty_version' => 'v4.32.0',
          'version' => '4.32.0.0',
          'reference' => '41f045c1f632e1474e15d4c7bc3abcb4a153563d',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../openspout/openspout',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'paragonie/constant_time_encoding' => 
        array (
          'pretty_version' => 'v3.1.3',
          'version' => '3.1.3.0',
          'reference' => 'd5b01a39b3415c2cd581d3bd3a3575c1ebbd8e77',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../paragonie/constant_time_encoding',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v4.4.1',
          'version' => '4.4.1.0',
          'reference' => 'f96a1b27864b585b0b29b0ee7331176726f7e54a',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '9d4b93d7f73d3f9c3189bb22c220fef271cdf568',
          'type' => 'composer-plugin',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '25bb17e37920ccc35cbbcda3b00d596aadf3e58d',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => 'e12a07046b826a40b1c8632fd7b80d6b8d7b628e',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'd9b32b60b2385e1688a68cc227594738ec26d96c',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-profanity' => 
        array (
          'pretty_version' => 'v4.2.1',
          'version' => '4.2.1.0',
          'reference' => '343cfa6f3564b7e35df0ebb77b7fa97039f72b27',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../pestphp/pest-plugin-profanity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.6.6',
          'version' => '5.6.6.0',
          'reference' => '5cee1d3dfc2d2aa6599834520911d246f656bcb8',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.12.0',
          'version' => '1.12.0.0',
          'reference' => '92a98ada2b93d9b201a613cb5a33584dde25f195',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.2',
          'version' => '2.3.2.0',
          'reference' => 'a004701b11273a26cd7955a61d67a7f1e525a45a',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.39',
          'version' => '2.1.39.0',
          'reference' => 'c6f73a2af4cbcd99c931d0fb8f08548cc0fa8224',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '12.5.3',
          'version' => '12.5.3.0',
          'reference' => 'b015312f28dd75b75d3422ca37dff2cd1a565e8d',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '3d1cd096ef6bea4bf2762ba586e35dbd317cbfd5',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '12b54e689b07a25a9b41e57736dfab6ec9ae5406',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'e1367a453f0eda562eedb4f659e13aa900d66c53',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '8.0.0',
          'version' => '8.0.0.0',
          'reference' => 'f258ce36aa457f3aa3339f9ed4c81fc66dc8c2cc',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '12.5.12',
          'version' => '12.5.12.0',
          'reference' => '418e06b3b46b0d54bad749ff4907fc7dfb530199',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pragmarx/google2fa' => 
        array (
          'pretty_version' => 'v9.0.0',
          'version' => '9.0.0.0',
          'reference' => 'e6bc62dd6ae83acc475f57912e27466019a1f2cf',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../pragmarx/google2fa',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pragmarx/google2fa-laravel' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '60f363c16db1e94263e0560efebe9fc2e302b7ef',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../pragmarx/google2fa-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pragmarx/google2fa-qrcode' => 
        array (
          'pretty_version' => 'v3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'ce4d8a729b6c93741c607cfb2217acfffb5bf76b',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../pragmarx/google2fa-qrcode',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../psr/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.20',
          'version' => '0.12.20.0',
          'reference' => '19678eb6b952a03b8a1d96ecee9edba518bb0373',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'ryangjchandler/blade-capture-directive' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'reference' => 'bbb1513dfd89eaec87a47fe0c449a7e3d4a1976d',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../ryangjchandler/blade-capture-directive',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '4.2.0',
          'version' => '4.2.0.0',
          'reference' => '90f41072d220e5c40df6e8635f5dafba2d9d4d04',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '7.1.4',
          'version' => '7.1.4.0',
          'reference' => '6a7de5df2e094f9a80b40a522391a7e6022df5f6',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'bad4316aba5303d0221f43f8cee37eb58d384bbb',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '7ab1ea946c012266ca32390913653d844ecd085f',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '8.0.3',
          'version' => '8.0.3.0',
          'reference' => '24a711b5c916efc6d6e62aa65aa2ec98fef77f68',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '016951ae10980765e4e7aee491eb288c64e505b7',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '8.0.2',
          'version' => '8.0.2.0',
          'reference' => 'ef1377171613d09edd25b7816f05be8313f9115d',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '97ffee3bcfb5805568d6af7f0f893678fc076d2f',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '1effe8e9b8e068e9ae228e542d5d11b5d16db894',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '4bfa827c969c98be1e527abd576533293c634f6a',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '0b01998a7d5b1f122911a66bebcb8d46f0c82d8c',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'e549163b9760b8f71f191651d22acf32d56d6d4d',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '3e6ccf7657d4f0a59200564b08cead899313b53c',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/color' => 
        array (
          'pretty_version' => '1.8.0',
          'version' => '1.8.0.0',
          'reference' => '142af7fec069a420babea80a5412eb2f646dcd8c',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../spatie/color',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/invade' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'b920f6411d21df4e8610a138e2e87ae4957d7f63',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../spatie/invade',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-activitylog' => 
        array (
          'pretty_version' => '4.11.0',
          'version' => '4.11.0.0',
          'reference' => 'cd7c458f0e128e56eb2d71977d67a846ce4cc10f',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../spatie/laravel-activitylog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-package-tools' => 
        array (
          'pretty_version' => '1.92.7',
          'version' => '1.92.7.0',
          'reference' => 'f09a799850b1ed765103a4f0b4355006360c49a5',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../spatie/laravel-package-tools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-permission' => 
        array (
          'pretty_version' => '7.2.0',
          'version' => '7.2.0.0',
          'reference' => '7d5ca47515fcba891cd18a769de0b6f0aa2555d8',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../spatie/laravel-permission',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'stancl/jobpipeline' => 
        array (
          'pretty_version' => 'v1.8.1',
          'version' => '1.8.1.0',
          'reference' => 'c4ba5ef04c99176eb000abb05fc81fb0f44f5d9c',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/jobpipeline',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'stancl/tenancy' => 
        array (
          'pretty_version' => 'v3.9.1',
          'version' => '3.9.1.0',
          'reference' => 'd98a170fbd2e114604bfec3bc6267a3d6e02dec1',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'stancl/virtualcolumn' => 
        array (
          'pretty_version' => 'v1.5.0',
          'version' => '1.5.0.0',
          'reference' => '75718edcfeeb19abc1970f5395043f7d43cce5bc',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/virtualcolumn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '832119f9b8dbc6c8e6f65f30c5969eca1e88764f',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '41e38717ac1dd7a46b6bda7d6a82af2d98a78894',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '6225bd458c53ecdee056214cb4a2ffaf58bd592b',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '8da531f364ddfee53e36092a7eebbbd0b775f6b8',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.0.4',
          'version' => '8.0.4.0',
          'reference' => '99301401da182b6cfaa4700dbe9987bb75474b47',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => 'ad4daa7c38668dcb031e63bc99ea9bd42196a2cb',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/html-sanitizer' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '5b0bbcc3600030b535dd0b17a0e8c56243f96d7f',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/html-sanitizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => '446d0db2b1f21575f1284b74533e425096abdfb6',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => '229eda477017f92bd2ce7615d06222ec0c19e82a',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '7b750074c40c694ceb34cb926d6dffee231c5cd6',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => 'b18c7e6e9eee1e19958138df10412f3c4c316148',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => '608476f4604102976d687c483ac63a79ba18cc97',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '0798827fe2c79caeed41d70b680c2c3507d10147',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.0.4',
          'version' => '8.0.4.0',
          'reference' => '758b372d6882506821ed666032e43020c4f57194',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.0.4',
          'version' => '8.0.4.0',
          'reference' => 'db70c8ce7db74fd2da7b1d268db46b2a8ce32c10',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '7719ce8aba76be93dfe249192f1fbfa52c588e36',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '0e4769b46a0c3c62390d124635ce59f66874b282',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v8.0.1',
          'version' => '8.0.1.0',
          'reference' => '7a1a90ba1df6e821a6b53c4cabdc32a56cabfb14',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.7',
          'version' => '0.8.7.0',
          'reference' => '1248f3f506ca9641d4f68cebcd538fa489754db8',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '7989e43bf381af0eac72e4f0ca5bcbfa81658be4',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.3',
          'version' => '5.6.3.0',
          'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '2.1.5',
          'version' => '2.1.5.0',
          'reference' => '79155f94852fa27e2f73b459f6503f5e87e2c188',
          'type' => 'library',
          'install_path' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/home/marco-vega/Projects/laravel/saasbp/vendor/larastan/larastan/bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'phar:///home/marco-vega/Projects/laravel/saasbp/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar:///home/marco-vega/Projects/laravel/saasbp/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar:///home/marco-vega/Projects/laravel/saasbp/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar:///home/marco-vega/Projects/laravel/saasbp/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'bcmath',
    8 => 'bz2',
    9 => 'calendar',
    10 => 'ctype',
    11 => 'curl',
    12 => 'date',
    13 => 'dba',
    14 => 'dom',
    15 => 'exif',
    16 => 'fileinfo',
    17 => 'filter',
    18 => 'ftp',
    19 => 'gd',
    20 => 'gettext',
    21 => 'gmp',
    22 => 'hash',
    23 => 'iconv',
    24 => 'igbinary',
    25 => 'imagick',
    26 => 'imap',
    27 => 'intl',
    28 => 'json',
    29 => 'ldap',
    30 => 'libxml',
    31 => 'mbstring',
    32 => 'mongodb',
    33 => 'mysqli',
    34 => 'mysqlnd',
    35 => 'openssl',
    36 => 'pcntl',
    37 => 'pcre',
    38 => 'pdo_mysql',
    39 => 'pdo_pgsql',
    40 => 'pdo_sqlite',
    41 => 'pgsql',
    42 => 'posix',
    43 => 'random',
    44 => 'readline',
    45 => 'redis',
    46 => 'session',
    47 => 'shmop',
    48 => 'soap',
    49 => 'sockets',
    50 => 'sodium',
    51 => 'sqlite3',
    52 => 'standard',
    53 => 'sysvmsg',
    54 => 'sysvsem',
    55 => 'sysvshm',
    56 => 'tokenizer',
    57 => 'xml',
    58 => 'xmlreader',
    59 => 'xmlwriter',
    60 => 'xsl',
    61 => 'zip',
    62 => 'zlib',
    63 => 'zstd',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '6',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/CreateNewUser.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Actions\\Fortify\\CreateNewUser',
        1 => 'currentPasswordRules',
        2 => 'App\\Actions\\Fortify\\CreateNewUser',
      ),
      1 => 
      array (
        0 => 'App\\Actions\\Fortify\\CreateNewUser',
        1 => 'nameRules',
        2 => 'App\\Actions\\Fortify\\CreateNewUser',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
        1 => 'App\\Concerns\\ProfileValidationRules',
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/ResetUserPassword.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Actions\\Fortify\\ResetUserPassword',
        1 => 'currentPasswordRules',
        2 => 'App\\Actions\\Fortify\\ResetUserPassword',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Concerns/PasswordValidationRules.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
        1 => 7,
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Concerns/ProfileValidationRules.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\ProfileValidationRules',
        1 => 8,
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Middleware/HandleAppearance.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\View',
        1 => 'share',
        2 => 19,
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/PasswordUpdateRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
        1 => 'currentPasswordRules',
        2 => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/ProfileDeleteRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
        1 => 'currentPasswordRules',
        2 => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/ProfileUpdateRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
        1 => 'nameRules',
        2 => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\ProfileValidationRules',
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/TwoFactorAuthenticationRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Models/User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/AppServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Date',
        1 => 'use',
        2 => 34,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Validation\\Rules\\Password',
        1 => 'defaults',
        2 => 40,
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/FortifyServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 81,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 85,
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/HorizonServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 30,
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2026_02_20_141622_create_permission_tables.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'throw_if',
        1 => 20,
      ),
      1 => 
      array (
        0 => 'throw_if',
        1 => 21,
      ),
      2 => 
      array (
        0 => 'throw_if',
        1 => 129,
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/routes/settings.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'redirect',
        2 => 10,
      ),
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/routes/tenant.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 26,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/CreateNewUser.php' => 
  array (
    'fileHash' => 'caaaa98a8867c44ddaa45a1f58fd388f3b46f781d22cd9f8af67e292d3b82e60',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/ResetUserPassword.php' => 
  array (
    'fileHash' => '8ec7f8a74a7f30b729bf77578d1b6a9add3c48643c92d584f7bb69e5b81c0996',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Concerns/PasswordValidationRules.php' => 
  array (
    'fileHash' => 'f963e4de8a2344058d331921aeb7bdb4dd0cff7f81fa9e8ef28eed38e9ceb4d7',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/CreateNewUser.php',
      1 => '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/ResetUserPassword.php',
      2 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/PasswordController.php',
      3 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/ProfileController.php',
      4 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/PasswordUpdateRequest.php',
      5 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/ProfileDeleteRequest.php',
      6 => '/home/marco-vega/Projects/laravel/saasbp/app/Providers/FortifyServiceProvider.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/CreateNewUser.php',
      1 => '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/ResetUserPassword.php',
      2 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/PasswordUpdateRequest.php',
      3 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/ProfileDeleteRequest.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Concerns/ProfileValidationRules.php' => 
  array (
    'fileHash' => '3ea33ccf5205063aed150d4a6ec8a4f68b5d65f07feebf1645f8f28f1f1204fc',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/CreateNewUser.php',
      1 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/ProfileController.php',
      2 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/ProfileUpdateRequest.php',
      3 => '/home/marco-vega/Projects/laravel/saasbp/app/Providers/FortifyServiceProvider.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/CreateNewUser.php',
      1 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/ProfileUpdateRequest.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => '25d1c1ef8e6cc8a376553faacfba2b07d9dfaee9bdbb84f14f77517580e9deb1',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/PasswordController.php',
      1 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/ProfileController.php',
      2 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/TwoFactorAuthenticationController.php',
      3 => '/home/marco-vega/Projects/laravel/saasbp/routes/settings.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/PasswordController.php' => 
  array (
    'fileHash' => '65f5f2c9584ee5e16209e75c1e8776d5515a220c6b44cc90521cca16f8f0caf8',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/routes/settings.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/ProfileController.php' => 
  array (
    'fileHash' => '5244c08bf37a6f8ff8888eaa34f71e2098c43bebe1e09d7969009b76a755c426',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/routes/settings.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/TwoFactorAuthenticationController.php' => 
  array (
    'fileHash' => '01bb59ba3ddc8172af9c5e2880cb8d54531c497cbf8f6149a5d40f5afee5e69b',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/routes/settings.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Middleware/HandleAppearance.php' => 
  array (
    'fileHash' => 'fbaf28dd888302116f530e0ff34be094141956eb6e925abb455ab3a2ebb96aba',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Middleware/HandleInertiaRequests.php' => 
  array (
    'fileHash' => '9129636ba69a8dbf97f1b1163e4383dee27cfcd578bb72d5ef3613e1ff9ec482',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/PasswordUpdateRequest.php' => 
  array (
    'fileHash' => 'a32e9198f1e25363834ff12a1a7d1cc5ec0bcfda3f32cf1c1d03530315cf2bf5',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/PasswordController.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/ProfileDeleteRequest.php' => 
  array (
    'fileHash' => 'f4d89321b0b482797c3fd5325f907ab4809b06ca3b60ffa8ea6d13540643b00e',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/ProfileController.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/ProfileUpdateRequest.php' => 
  array (
    'fileHash' => '846e47b3ad44f7d7cea00c6c6b5744552cb894e82e8f5ed5a9a7244a5c8b2c6c',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/ProfileController.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/TwoFactorAuthenticationRequest.php' => 
  array (
    'fileHash' => 'fa2b1ce281afebecf3db2850cecc1b64677e046c999a0cc7079222864d48feaf',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/TwoFactorAuthenticationController.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Models/User.php' => 
  array (
    'fileHash' => 'ac4958d0886507d8a3b0020d965e528869f9cf127e724aff6aa47e08ebb4af04',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/CreateNewUser.php',
      1 => '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/ResetUserPassword.php',
      2 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/PasswordController.php',
      3 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/ProfileController.php',
      4 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/TwoFactorAuthenticationController.php',
      5 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Middleware/HandleInertiaRequests.php',
      6 => '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/ProfileUpdateRequest.php',
      7 => '/home/marco-vega/Projects/laravel/saasbp/config/auth.php',
      8 => '/home/marco-vega/Projects/laravel/saasbp/database/factories/UserFactory.php',
      9 => '/home/marco-vega/Projects/laravel/saasbp/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '37576499f122c00edd6d6bda207bb4cbb4d5fa71f694b05d0d0f87c466985bec',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/Filament/AdminPanelProvider.php' => 
  array (
    'fileHash' => '44a0c11556ffc21aa0f8a2a7877a159a7604c4756c24b3b7c7e28a4d3e7c29f6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/FortifyServiceProvider.php' => 
  array (
    'fileHash' => 'dfdbe65837fb224a31e865903bbb27b2f179bbda55cea60445129910a858a93c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/HorizonServiceProvider.php' => 
  array (
    'fileHash' => '2552d1f0844bf11e64ab6c68c357d71d32f980cadfdf2553c7727d563c3bfb77',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/TenancyServiceProvider.php' => 
  array (
    'fileHash' => 'd921e599cde45704839e49350db11658eed54a040143cd6a1656ad87b10a34d9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/activitylog.php' => 
  array (
    'fileHash' => 'fb0514535d5c9d3ea053f9ddc170800da14b80affb49935499ada54e12881357',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/app.php' => 
  array (
    'fileHash' => '78dcd36b226fd7b24057cb95f567cb6e96561c2406653892d8aef6dcea8461e4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/auth.php' => 
  array (
    'fileHash' => '50f8a6fabf848d20ea42a21e01066dd8a75bd822c8251a45f8939616432424dc',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/cache.php' => 
  array (
    'fileHash' => 'b8bcf382283330b94c0a602ff06452de819041ea709e28eea5065d51d1d7d085',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/database.php' => 
  array (
    'fileHash' => '4f56083ec3874d216946401fb162b6ef50bc0909d004cd3337e2e33424fc6403',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/filesystems.php' => 
  array (
    'fileHash' => 'ba7060d7a23e490c3ce830656f6d24ad3ccf5b868e3293f2a12e411959dc5635',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/fortify.php' => 
  array (
    'fileHash' => 'a77ad52cca40dc502d6b163ab0ea3d3ac42dc8f651c2c0c6dc7ec1752e733010',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/horizon.php' => 
  array (
    'fileHash' => '0ce52671418e20eb4eee35a96ef6f526c14e7e21bfcc14590aef6bcb294a1100',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/inertia.php' => 
  array (
    'fileHash' => '01f8f52bc4fc444904b6f1dc126ed53fa4f8ffd753535c8d703cc7eb629edbbc',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/logging.php' => 
  array (
    'fileHash' => 'd90f24826a3330437f2f2fc12bb28680abe1281d35d62b082c234f4b69873835',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/mail.php' => 
  array (
    'fileHash' => '825c4b149f2fe412a2e37199794e7c05df7ed86fb51811777faf80238f748aae',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/permission.php' => 
  array (
    'fileHash' => '994a9942320e082476818a7e2b2404448127e05e1c244d7385780cdd9d226b88',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/queue.php' => 
  array (
    'fileHash' => '6101774da7c8b79af46d0028f2b8b31a484c3f7eda10b76e5b27b6093ad364a4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/services.php' => 
  array (
    'fileHash' => '8258c4487eb1d73a97e569eb0e411e3f25368044812df4cba807860432be1d92',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/session.php' => 
  array (
    'fileHash' => '34eabc7604c197be99568b98d991dd9d03ff013aa602d7eaab1478398ba3f8b6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/config/tenancy.php' => 
  array (
    'fileHash' => 'fb2d6031d30dfa8708d7ea5f8cf0914e3d16b730e1cdc7533329e165062384ba',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/factories/UserFactory.php' => 
  array (
    'fileHash' => 'd664f98cc47387cc42285f1b91051c632daa8ff072d1a8015315010e833393f6',
    'dependentFiles' => 
    array (
      0 => '/home/marco-vega/Projects/laravel/saasbp/app/Models/User.php',
      1 => '/home/marco-vega/Projects/laravel/saasbp/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/0001_01_01_000000_create_users_table.php' => 
  array (
    'fileHash' => '10d79883bc08ce46510f9ad8b1830b4d06d586dc56ae2c8bac3b3e491f69a90f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/0001_01_01_000001_create_cache_table.php' => 
  array (
    'fileHash' => '2ca8398390ecef8eaf72aeac7fefce67f7de631b6f2ec7b7081c8db8953215dc',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/0001_01_01_000002_create_jobs_table.php' => 
  array (
    'fileHash' => '7c9c712adf4091c87bf2612f4d0dccdfa1df4501553e4ac068b83d7bd5462fa5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2019_09_15_000010_create_tenants_table.php' => 
  array (
    'fileHash' => '5eec7b2f33995175db5a09b2d2eefdfdfc079ba7f90ef66d36f418e66e45605e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2019_09_15_000020_create_domains_table.php' => 
  array (
    'fileHash' => '69751ed605b0aa69bac1ce99033fe8e82388845fb382525d68794699ee53c8df',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2025_08_14_170933_add_two_factor_columns_to_users_table.php' => 
  array (
    'fileHash' => '79f22594944d826286ad1dafb13217967781e104dbb021a1c85fbdf9270db4a5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2026_02_20_141622_create_permission_tables.php' => 
  array (
    'fileHash' => 'bd097ba10f37a131a9a8885ed4723387521a2f222f636b37b911e7b9ed34eec2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2026_02_20_141625_create_activity_log_table.php' => 
  array (
    'fileHash' => '0d41e61c152086aa368429d8c53e914f27c636d4604933b268b54f24cee4395b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2026_02_20_141626_add_event_column_to_activity_log_table.php' => 
  array (
    'fileHash' => 'a41ca8947ec7fe85f83d5e42953d1f906f0d26112aeb229e9b18e837821d99c0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2026_02_20_141627_add_batch_uuid_column_to_activity_log_table.php' => 
  array (
    'fileHash' => '76d02883e04bfc9eee2a7246eec4ac8a2ced7e410c40ba084b32099bd2d2d8f5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/seeders/DatabaseSeeder.php' => 
  array (
    'fileHash' => '03b392bf45ef0e52d2fa3dba22e33f8c1a66f50e94546b1815b72d07b56ad9b6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/routes/console.php' => 
  array (
    'fileHash' => '9adccc33e7dd400683e434774077c7fdb2f299c5712cedf16a43fdf56f2850fa',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/routes/settings.php' => 
  array (
    'fileHash' => '4469e67f66cd2decd84d36992fa4b19624b741793f5bf8d4c52f565f5ec7d99c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/routes/tenant.php' => 
  array (
    'fileHash' => 'dde0498049a6785a6270c23fe439f9044f13015ebeaa8ef6963ecfeb730b27df',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/routes/web.php' => 
  array (
    'fileHash' => '507a97e7be8c5ee2ea97cf04c8679376b24a115bbfb5cf295ccf3e4229f753c3',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/CreateNewUser.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\CreateNewUser',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
        1 => 'App\\Concerns\\ProfileValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'profilevalidationrules' => 'App\\Concerns\\ProfileValidationRules',
              'user' => 'App\\Models\\User',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'createsnewusers' => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\User',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Actions/Fortify/ResetUserPassword.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\ResetUserPassword',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reset',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and reset the user\'s forgotten password.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'user' => 'App\\Models\\User',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'resetsuserpasswords' => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Concerns/PasswordValidationRules.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Concerns\\PasswordValidationRules',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'passwordRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \\Illuminate\\Contracts\\Validation\\Rule|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'currentPasswordRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate the current password.
     *
     * @return array<int, \\Illuminate\\Contracts\\Validation\\Rule|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Concerns/ProfileValidationRules.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Concerns\\ProfileValidationRules',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'profileRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate user profiles.
     *
     * @return array<string, array<int, \\Illuminate\\Contracts\\Validation\\Rule|array<mixed>|string>>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nameRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate user names.
     *
     * @return array<int, \\Illuminate\\Contracts\\Validation\\Rule|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'emailRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate user emails.
     *
     * @return array<int, \\Illuminate\\Contracts\\Validation\\Rule|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/PasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Settings\\PasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the user\'s password settings page.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'passwordupdaterequest' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the user\'s password.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'passwordupdaterequest' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/ProfileController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Settings\\ProfileController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the user\'s profile settings page.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'profiledeleterequest' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
              'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the user\'s profile information.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'profiledeleterequest' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
              'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete the user\'s profile.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'profiledeleterequest' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
              'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Controllers/Settings/TwoFactorAuthenticationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Settings\\TwoFactorAuthenticationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
        0 => 'Illuminate\\Routing\\Controllers\\HasMiddleware',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'middleware',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the middleware that should be assigned to the controller.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'twofactorauthenticationrequest' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
              'hasmiddleware' => 'Illuminate\\Routing\\Controllers\\HasMiddleware',
              'middleware' => 'Illuminate\\Routing\\Controllers\\Middleware',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
              'features' => 'Laravel\\Fortify\\Features',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the user\'s two-factor authentication settings page.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'twofactorauthenticationrequest' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
              'hasmiddleware' => 'Illuminate\\Routing\\Controllers\\HasMiddleware',
              'middleware' => 'Illuminate\\Routing\\Controllers\\Middleware',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
              'features' => 'Laravel\\Fortify\\Features',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Middleware/HandleAppearance.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\HandleAppearance',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Closure(\\Illuminate\\Http\\Request): (\\Symfony\\Component\\HttpFoundation\\Response)  $next
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\Support\\Facades\\View',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Middleware/HandleInertiaRequests.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\HandleInertiaRequests',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Inertia\\Middleware',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'rootView',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The root template that\'s loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'middleware' => 'Inertia\\Middleware',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'version',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'middleware' => 'Inertia\\Middleware',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'share',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'middleware' => 'Inertia\\Middleware',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/PasswordUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/ProfileDeleteRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/ProfileUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\ProfileValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'profilevalidationrules' => 'App\\Concerns\\ProfileValidationRules',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Http/Requests/Settings/TwoFactorAuthenticationRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'features' => 'Laravel\\Fortify\\Features',
              'interactswithtwofactorstate' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'features' => 'Laravel\\Fortify\\Features',
              'interactswithtwofactorstate' => 'Laravel\\Fortify\\InteractsWithTwoFactorState',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'twofactorauthenticatable' => 'Laravel\\Fortify\\TwoFactorAuthenticatable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'date' => 'Illuminate\\Support\\Facades\\Date',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'date' => 'Illuminate\\Support\\Facades\\Date',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configureDefaults',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Configure default behaviors for production-ready applications.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'date' => 'Illuminate\\Support\\Facades\\Date',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/Filament/AdminPanelProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\Filament\\AdminPanelProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Filament\\PanelProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'panel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Filament\\Panel',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Filament\\Panel',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/FortifyServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\FortifyServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
              'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'str' => 'Illuminate\\Support\\Str',
              'inertia' => 'Inertia\\Inertia',
              'features' => 'Laravel\\Fortify\\Features',
              'fortify' => 'Laravel\\Fortify\\Fortify',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
              'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'str' => 'Illuminate\\Support\\Str',
              'inertia' => 'Inertia\\Inertia',
              'features' => 'Laravel\\Fortify\\Features',
              'fortify' => 'Laravel\\Fortify\\Fortify',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/HorizonServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\HorizonServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Laravel\\Horizon\\HorizonApplicationServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'horizon' => 'Laravel\\Horizon\\Horizon',
              'horizonapplicationserviceprovider' => 'Laravel\\Horizon\\HorizonApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the Horizon gate.
     *
     * This gate determines who can access Horizon in non-local environments.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'horizon' => 'Laravel\\Horizon\\Horizon',
              'horizonapplicationserviceprovider' => 'Laravel\\Horizon\\HorizonApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/app/Providers/TenancyServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\TenancyServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'controllerNamespace',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'events',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<class-string, list<class-string|JobPipeline>>
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'event' => 'Illuminate\\Support\\Facades\\Event',
              'route' => 'Illuminate\\Support\\Facades\\Route',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'jobpipeline' => 'Stancl\\JobPipeline\\JobPipeline',
              'events' => 'Stancl\\Tenancy\\Events',
              'jobs' => 'Stancl\\Tenancy\\Jobs',
              'listeners' => 'Stancl\\Tenancy\\Listeners',
              'middleware' => 'Stancl\\Tenancy\\Middleware',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bootEvents',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mapRoutes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'makeTenancyMiddlewareHighestPriority',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/factories/UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\User>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'password',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The current password being used by the factory.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withTwoFactor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model has two-factor authentication configured.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2019_09_15_000010_create_tenants_table.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'CreateTenantsTable',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Migrations\\Migration',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'up',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the migrations.
     */',
             'namespace' => NULL,
             'uses' => 
            array (
              'migration' => 'Illuminate\\Database\\Migrations\\Migration',
              'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
              'schema' => 'Illuminate\\Support\\Facades\\Schema',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'down',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Reverse the migrations.
     */',
             'namespace' => NULL,
             'uses' => 
            array (
              'migration' => 'Illuminate\\Database\\Migrations\\Migration',
              'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
              'schema' => 'Illuminate\\Support\\Facades\\Schema',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2019_09_15_000020_create_domains_table.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'CreateDomainsTable',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Migrations\\Migration',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'up',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the migrations.
     */',
             'namespace' => NULL,
             'uses' => 
            array (
              'migration' => 'Illuminate\\Database\\Migrations\\Migration',
              'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
              'schema' => 'Illuminate\\Support\\Facades\\Schema',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'down',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Reverse the migrations.
     */',
             'namespace' => NULL,
             'uses' => 
            array (
              'migration' => 'Illuminate\\Database\\Migrations\\Migration',
              'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
              'schema' => 'Illuminate\\Support\\Facades\\Schema',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2026_02_20_141625_create_activity_log_table.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'CreateActivityLogTable',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Migrations\\Migration',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'up',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'down',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2026_02_20_141626_add_event_column_to_activity_log_table.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AddEventColumnToActivityLogTable',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Migrations\\Migration',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'up',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'down',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/migrations/2026_02_20_141627_add_batch_uuid_column_to_activity_log_table.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AddBatchUuidColumnToActivityLogTable',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Migrations\\Migration',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'up',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'down',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/marco-vega/Projects/laravel/saasbp/database/seeders/DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Seed the application\'s database.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
