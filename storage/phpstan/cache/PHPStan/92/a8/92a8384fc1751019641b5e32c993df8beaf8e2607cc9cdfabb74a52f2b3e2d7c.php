<?php declare(strict_types = 1);

// osfsl-/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/Bootstrappers/DatabaseTenancyBootstrapper.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Stancl\Tenancy\Bootstrappers\DatabaseTenancyBootstrapper
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-0dd0f954a0d95712150016770b4a1f80df0d980a57a3da3b126ca77b53a95722-8.4.1-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
        'filename' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/Bootstrappers/DatabaseTenancyBootstrapper.php',
      ),
    ),
    'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
    'name' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
    'shortName' => 'DatabaseTenancyBootstrapper',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 42,
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
      'database' => 
      array (
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
        'name' => 'database',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var DatabaseManager */',
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 24,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Stancl\\Tenancy\\Database\\DatabaseManager',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 18,
            'endLine' => 18,
            'startColumn' => 33,
            'endColumn' => 57,
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
        'startLine' => 18,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
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
            'startLine' => 23,
            'endLine' => 23,
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
        'startLine' => 23,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
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
        'startLine' => 38,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\DatabaseTenancyBootstrapper',
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