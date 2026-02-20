<?php declare(strict_types = 1);

// osfsl-/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/Bootstrappers/QueueTenancyBootstrapper.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Stancl\Tenancy\Bootstrappers\QueueTenancyBootstrapper
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-40f157511c3f96a41182dfe93c7126f782a2cc453049754d33ccb9f1639d531f-8.4.1-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'filename' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/Bootstrappers/QueueTenancyBootstrapper.php',
      ),
    ),
    'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
    'name' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
    'shortName' => 'QueueTenancyBootstrapper',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 20,
    'endLine' => 160,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Stancl\\Tenancy\\Contracts\\TenancyBootstrapper',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'config' => 
      array (
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'name' => 'config',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var Repository */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queue' => 
      array (
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'name' => 'queue',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var QueueManager */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'forceRefresh' => 
      array (
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'name' => 'forceRefresh',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 38,
            'startTokenPos' => 109,
            'startFilePos' => 1316,
            'endTokenPos' => 109,
            'endFilePos' => 1320,
          ),
        ),
        'docComment' => '/**
 * Don\'t persist the same tenant across multiple jobs even if they have the same tenant ID.
 *
 * This is useful when you\'re changing the tenant\'s state (e.g. properties in the `data` column) and want the next job to initialize tenancy again
 * with the new data. Features like the Tenant Config are only executed when tenancy is initialized, so the re-initialization is needed in some cases.
 *
 * @deprecated This now has no effect, tenancy is always ended between queued jobs.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__constructStatic' => 
      array (
        'name' => '__constructStatic',
        'parameters' => 
        array (
          'app' => 
          array (
            'name' => 'app',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Foundation\\Application',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The normal constructor is only executed after tenancy is bootstrapped.
 * However, we\'re registering a hook to initialize tenancy. Therefore,
 * we need to register the hook at service provider execution time.
 */',
        'startLine' => 45,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'aliasName' => NULL,
      ),
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Config\\Repository',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Queue\\QueueManager',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 53,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 50,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'aliasName' => NULL,
      ),
      'setUpJobListener' => 
      array (
        'name' => 'setUpJobListener',
        'parameters' => 
        array (
          'dispatcher' => 
          array (
            'name' => 'dispatcher',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 48,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 58,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'aliasName' => NULL,
      ),
      'initializeTenancyForQueue' => 
      array (
        'name' => 'initializeTenancyForQueue',
        'parameters' => 
        array (
          'tenantId' => 
          array (
            'name' => 'tenantId',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 57,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 82,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'aliasName' => NULL,
      ),
      'revertToPreviousState' => 
      array (
        'name' => 'revertToPreviousState',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 96,
            'endLine' => 96,
            'startColumn' => 53,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'previousTenant' => 
          array (
            'name' => 'previousTenant',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 96,
            'endLine' => 96,
            'startColumn' => 61,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 96,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'aliasName' => NULL,
      ),
      'setUpPayloadGenerator' => 
      array (
        'name' => 'setUpPayloadGenerator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 123,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'aliasName' => NULL,
      ),
      'bootstrap' => 
      array (
        'name' => 'bootstrap',
        'parameters' => 
        array (
          'tenant' => 
          array (
            'name' => 'tenant',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Stancl\\Tenancy\\Contracts\\Tenant',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 134,
            'endLine' => 134,
            'startColumn' => 31,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 134,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'aliasName' => NULL,
      ),
      'revert' => 
      array (
        'name' => 'revert',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 139,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'aliasName' => NULL,
      ),
      'getPayload' => 
      array (
        'name' => 'getPayload',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 32,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 144,
        'endLine' => 159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\QueueTenancyBootstrapper',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));