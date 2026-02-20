<?php declare(strict_types = 1);

// osfsl-/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/TenantDatabaseManagers/PostgreSQLDatabaseManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Stancl\Tenancy\TenantDatabaseManagers\PostgreSQLDatabaseManager
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-81fb942fab9c8a141cbfe50f00bbe63ee2c3ad03e418f6cc37cd15858cad663a-8.4.1-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'filename' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../stancl/tenancy/src/TenantDatabaseManagers/PostgreSQLDatabaseManager.php',
      ),
    ),
    'namespace' => 'Stancl\\Tenancy\\TenantDatabaseManagers',
    'name' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
    'shortName' => 'PostgreSQLDatabaseManager',
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
    'endLine' => 53,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Stancl\\Tenancy\\Contracts\\TenantDatabaseManager',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'connection' => 
      array (
        'declaringClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'implementingClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'name' => 'connection',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var string */',
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 26,
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
      'database' => 
      array (
        'name' => 'database',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Connection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 18,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Stancl\\Tenancy\\TenantDatabaseManagers',
        'declaringClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'implementingClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'currentClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'aliasName' => NULL,
      ),
      'setConnection' => 
      array (
        'name' => 'setConnection',
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 35,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 27,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\TenantDatabaseManagers',
        'declaringClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'implementingClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'currentClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'aliasName' => NULL,
      ),
      'createDatabase' => 
      array (
        'name' => 'createDatabase',
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
                'name' => 'Stancl\\Tenancy\\Contracts\\TenantWithDatabase',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 36,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 32,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\TenantDatabaseManagers',
        'declaringClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'implementingClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'currentClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'aliasName' => NULL,
      ),
      'deleteDatabase' => 
      array (
        'name' => 'deleteDatabase',
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
                'name' => 'Stancl\\Tenancy\\Contracts\\TenantWithDatabase',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 36,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 37,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\TenantDatabaseManagers',
        'declaringClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'implementingClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'currentClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'aliasName' => NULL,
      ),
      'databaseExists' => 
      array (
        'name' => 'databaseExists',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 42,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\TenantDatabaseManagers',
        'declaringClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'implementingClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'currentClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'aliasName' => NULL,
      ),
      'makeConnectionConfig' => 
      array (
        'name' => 'makeConnectionConfig',
        'parameters' => 
        array (
          'baseConfig' => 
          array (
            'name' => 'baseConfig',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 42,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'databaseName' => 
          array (
            'name' => 'databaseName',
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
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 61,
            'endColumn' => 80,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 47,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Stancl\\Tenancy\\TenantDatabaseManagers',
        'declaringClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'implementingClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
        'currentClassName' => 'Stancl\\Tenancy\\TenantDatabaseManagers\\PostgreSQLDatabaseManager',
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