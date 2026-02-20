<?php declare(strict_types = 1);

// osfsl-/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Testing/Concerns/InteractsWithTime.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Testing\Concerns\InteractsWithTime
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-cab1281f6b4db0b1a243f6afe5bb254f657e56433d67717c650174bca84874b1-8.4.1-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'filename' => '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Testing/Concerns/InteractsWithTime.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
    'name' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
    'shortName' => 'InteractsWithTime',
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
    'endLine' => 74,
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
    ),
    'immediateMethods' => 
    array (
      'freezeTime' => 
      array (
        'name' => 'freezeTime',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 16,
                'endLine' => 16,
                'startTokenPos' => 35,
                'startFilePos' => 307,
                'endTokenPos' => 35,
                'endFilePos' => 310,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 32,
            'endColumn' => 47,
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
 * Freeze time.
 *
 * @param  callable|null  $callback
 * @return mixed
 */',
        'startLine' => 16,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'aliasName' => NULL,
      ),
      'freezeSecond' => 
      array (
        'name' => 'freezeSecond',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 29,
                'endLine' => 29,
                'startTokenPos' => 93,
                'startFilePos' => 635,
                'endTokenPos' => 93,
                'endFilePos' => 638,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 34,
            'endColumn' => 49,
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
 * Freeze time at the beginning of the current second.
 *
 * @param  callable|null  $callback
 * @return mixed
 */',
        'startLine' => 29,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'aliasName' => NULL,
      ),
      'travel' => 
      array (
        'name' => 'travel',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 28,
            'endColumn' => 33,
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
 * Begin travelling to another time.
 *
 * @param  int  $value
 * @return \\Illuminate\\Foundation\\Testing\\Wormhole
 */',
        'startLine' => 42,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'aliasName' => NULL,
      ),
      'travelTo' => 
      array (
        'name' => 'travelTo',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 30,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 54,
                'endLine' => 54,
                'startTokenPos' => 183,
                'startFilePos' => 1280,
                'endTokenPos' => 183,
                'endFilePos' => 1283,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 37,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Travel to another time.
 *
 * @param  \\DateTimeInterface|\\Closure|\\Illuminate\\Support\\Carbon|string|bool|null  $date
 * @param  callable|null  $callback
 * @return mixed
 */',
        'startLine' => 54,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'aliasName' => NULL,
      ),
      'travelBack' => 
      array (
        'name' => 'travelBack',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Travel back to the current time.
 *
 * @return \\DateTimeInterface
 */',
        'startLine' => 70,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
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