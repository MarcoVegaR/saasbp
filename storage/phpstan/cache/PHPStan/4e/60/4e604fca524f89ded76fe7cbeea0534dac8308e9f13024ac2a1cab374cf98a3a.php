<?php declare(strict_types = 1);

// osfsl-/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/Bootstrappers/FilesystemTenancyBootstrapper.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Stancl\Tenancy\Bootstrappers\FilesystemTenancyBootstrapper
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3cbe3126667bf0d232b3b5b29a57c65089fc84cf45c9760021ef7aa92176bdd7-8.4.1-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
        'filename' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/Bootstrappers/FilesystemTenancyBootstrapper.php',
      ),
    ),
    'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
    'name' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
    'shortName' => 'FilesystemTenancyBootstrapper',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 93,
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
      'app' => 
      array (
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
        'name' => 'app',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var Application */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'originalPaths' => 
      array (
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
        'name' => 'originalPaths',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 18,
            'startTokenPos' => 60,
            'startFilePos' => 419,
            'endTokenPos' => 61,
            'endFilePos' => 420,
          ),
        ),
        'docComment' => '/** @var array */',
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 31,
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
            'startLine' => 20,
            'endLine' => 20,
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
        'startLine' => 20,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
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
            'startLine' => 36,
            'endLine' => 36,
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
        'startLine' => 36,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
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
        'startLine' => 78,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Bootstrappers',
        'declaringClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
        'implementingClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
        'currentClassName' => 'Stancl\\Tenancy\\Bootstrappers\\FilesystemTenancyBootstrapper',
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