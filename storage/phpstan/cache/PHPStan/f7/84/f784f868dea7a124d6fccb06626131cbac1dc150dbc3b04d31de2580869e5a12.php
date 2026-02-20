<?php declare(strict_types = 1);

// osfsl-/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/Bootstrappers/CacheTenancyBootstrapper.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Stancl\Tenancy\Bootstrappers\CacheTenancyBootstrapper
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-760c3d2eef518f27d87e87cc213fc42ea84ca5d788a9584442b375a5c737f4e8-8.4.1-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'filename' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/Bootstrappers/CacheTenancyBootstrapper.php',
      ),
    ),
    'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
    'name' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
    'shortName' => 'CacheTenancyBootstrapper',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 57,
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
      'originalCache' => 
      array (
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'name' => 'originalCache',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var CacheManager */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'app' => 
      array (
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'name' => 'app',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var Application */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 19,
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
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 33,
            'endColumn' => 48,
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
        'startLine' => 22,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
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
            'startLine' => 27,
            'endLine' => 27,
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
        'startLine' => 27,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
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
        'startLine' => 37,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'aliasName' => NULL,
      ),
      'resetFacadeCache' => 
      array (
        'name' => 'resetFacadeCache',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * This wouldn\'t be necessary, but is needed when a call to the
 * facade has been made prior to bootstrapping tenancy. The
 * facade has its own cache, separate from the container.
 */',
        'startLine' => 53,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\CacheTenancyBootstrapper',
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