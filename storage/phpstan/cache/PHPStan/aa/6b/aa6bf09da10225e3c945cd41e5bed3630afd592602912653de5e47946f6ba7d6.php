<?php declare(strict_types = 1);

// osfsl-/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/Database/Models/Domain.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Stancl\Tenancy\Database\Models\Domain
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-155b223fb5645f68f640f52ce947a69e643d1b34e779ab49cc7b4cd00b5ccedd-8.4.1-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Stancl\\Tenancy\\Database\\Models\\Domain',
        'filename' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/Database/Models/Domain.php',
      ),
    ),
    'namespace' => 'Stancl\\Tenancy\\Database\\Models',
    'name' => 'Stancl\\Tenancy\\Database\\Models\\Domain',
    'shortName' => 'Domain',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @property string $domain
 * @property string $tenant_id
 *
 * @property-read Tenant|Model $tenant
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 43,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
    'implementsClassNames' => 
    array (
      0 => 'Stancl\\Tenancy\\Contracts\\Domain',
    ),
    'traitClassNames' => 
    array (
      0 => 'Stancl\\Tenancy\\Database\\Concerns\\CentralConnection',
      1 => 'Stancl\\Tenancy\\Database\\Concerns\\EnsuresDomainIsNotOccupied',
      2 => 'Stancl\\Tenancy\\Database\\Concerns\\ConvertsDomainsToLowercase',
      3 => 'Stancl\\Tenancy\\Database\\Concerns\\InvalidatesTenantsResolverCache',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'guarded' => 
      array (
        'declaringClassName' => 'Stancl\\Tenancy\\Database\\Models\\Domain',
        'implementingClassName' => 'Stancl\\Tenancy\\Database\\Models\\Domain',
        'name' => 'guarded',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 26,
            'startTokenPos' => 76,
            'startFilePos' => 617,
            'endTokenPos' => 77,
            'endFilePos' => 618,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dispatchesEvents' => 
      array (
        'declaringClassName' => 'Stancl\\Tenancy\\Database\\Models\\Domain',
        'implementingClassName' => 'Stancl\\Tenancy\\Database\\Models\\Domain',
        'name' => 'dispatchesEvents',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'saving\' => \\Stancl\\Tenancy\\Events\\SavingDomain::class, \'saved\' => \\Stancl\\Tenancy\\Events\\DomainSaved::class, \'creating\' => \\Stancl\\Tenancy\\Events\\CreatingDomain::class, \'created\' => \\Stancl\\Tenancy\\Events\\DomainCreated::class, \'updating\' => \\Stancl\\Tenancy\\Events\\UpdatingDomain::class, \'updated\' => \\Stancl\\Tenancy\\Events\\DomainUpdated::class, \'deleting\' => \\Stancl\\Tenancy\\Events\\DeletingDomain::class, \'deleted\' => \\Stancl\\Tenancy\\Events\\DomainDeleted::class]',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 42,
            'startTokenPos' => 111,
            'startFilePos' => 763,
            'endTokenPos' => 185,
            'endFilePos' => 1169,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 6,
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
      'tenant' => 
      array (
        'name' => 'tenant',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 28,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\Database\\Models',
        'declaringClassName' => 'Stancl\\Tenancy\\Database\\Models\\Domain',
        'implementingClassName' => 'Stancl\\Tenancy\\Database\\Models\\Domain',
        'currentClassName' => 'Stancl\\Tenancy\\Database\\Models\\Domain',
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