<?php declare(strict_types = 1);

// osfsl-/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/framework/src/Illuminate/Testing/Fluent/Concerns/Debugging.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Testing\Fluent\Concerns\Debugging
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3d222e099ac08ac9fa814fbe2f8ff6cf6ef39a0e53c1dceb73dcd8623f7af5c7-8.4.1-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Testing\\Fluent\\Concerns\\Debugging',
        'filename' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/framework/src/Illuminate/Testing/Fluent/Concerns/Debugging.php',
      ),
    ),
    'namespace' => 'Illuminate\\Testing\\Fluent\\Concerns',
    'name' => 'Illuminate\\Testing\\Fluent\\Concerns\\Debugging',
    'shortName' => 'Debugging',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 31,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Dumpable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'dump' => 
      array (
        'name' => 'dump',
        'parameters' => 
        array (
          'prop' => 
          array (
            'name' => 'prop',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 17,
                'endLine' => 17,
                'startTokenPos' => 38,
                'startFilePos' => 281,
                'endTokenPos' => 38,
                'endFilePos' => 284,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 26,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dumps the given props.
 *
 * @param  string|null  $prop
 * @return $this
 */',
        'startLine' => 17,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing\\Fluent\\Concerns',
        'declaringClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Debugging',
        'implementingClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Debugging',
        'currentClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Debugging',
        'aliasName' => NULL,
      ),
      'prop' => 
      array (
        'name' => 'prop',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 30,
                'endLine' => 30,
                'startTokenPos' => 81,
                'startFilePos' => 564,
                'endTokenPos' => 81,
                'endFilePos' => 567,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 38,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve a prop within the current scope using "dot" notation.
 *
 * @param  string|null  $key
 * @return mixed
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Illuminate\\Testing\\Fluent\\Concerns',
        'declaringClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Debugging',
        'implementingClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Debugging',
        'currentClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Debugging',
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