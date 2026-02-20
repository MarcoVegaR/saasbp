<?php declare(strict_types = 1);

// osfsl-/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/framework/src/Illuminate/Testing/Fluent/Concerns/Interaction.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Testing\Fluent\Concerns\Interaction
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3b466f1f26dda2113b7da03c8da228ceaa766dadbd592679b97873713f02272f-8.4.1-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'filename' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/framework/src/Illuminate/Testing/Fluent/Concerns/Interaction.php',
      ),
    ),
    'namespace' => 'Illuminate\\Testing\\Fluent\\Concerns',
    'name' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
    'shortName' => 'Interaction',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 67,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'interacted' => 
      array (
        'declaringClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'implementingClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'name' => 'interacted',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 35,
            'startFilePos' => 255,
            'endTokenPos' => 36,
            'endFilePos' => 256,
          ),
        ),
        'docComment' => '/**
 * The list of interacted properties.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
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
      'interactsWith' => 
      array (
        'name' => 'interactsWith',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 38,
            'endColumn' => 48,
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
        'docComment' => '/**
 * Marks the property as interacted.
 *
 * @param  string  $key
 * @return void
 */',
        'startLine' => 23,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Testing\\Fluent\\Concerns',
        'declaringClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'implementingClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'currentClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'aliasName' => NULL,
      ),
      'interacted' => 
      array (
        'name' => 'interacted',
        'parameters' => 
        array (
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
        'docComment' => '/**
 * Asserts that all properties have been interacted with.
 *
 * @return void
 */',
        'startLine' => 37,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing\\Fluent\\Concerns',
        'declaringClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'implementingClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'currentClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'aliasName' => NULL,
      ),
      'etc' => 
      array (
        'name' => 'etc',
        'parameters' => 
        array (
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
 * Disables the interaction check.
 *
 * @return $this
 */',
        'startLine' => 53,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Testing\\Fluent\\Concerns',
        'declaringClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'implementingClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'currentClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
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
                'startLine' => 66,
                'endLine' => 66,
                'startTokenPos' => 230,
                'startFilePos' => 1467,
                'endTokenPos' => 230,
                'endFilePos' => 1470,
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
            'startLine' => 66,
            'endLine' => 66,
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
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Illuminate\\Testing\\Fluent\\Concerns',
        'declaringClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'implementingClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
        'currentClassName' => 'Illuminate\\Testing\\Fluent\\Concerns\\Interaction',
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