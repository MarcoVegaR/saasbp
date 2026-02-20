<?php declare(strict_types = 1);

// ftm-/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v4-2.3.2',
   'data' => 
  array (
    0 => 
    array (
      '2caf89049c9ea6cd70296181db04e347' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
          'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'f5f367c519cdc22145bbea9c6420ef60' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '05be938b178beac6126a9584626a058c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '86645cef9c6c5708bffc8776886712b7' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'bootHasPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '1d8da5b9b4dece78af2d11d5510fad0e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getPermissionClass',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '31141b5a0f96e39dd97ff9a19d746157' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getWildcardClass',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '0f7f7c27d7eff5ec42e91b0b1d4799fd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'permissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'a0fbc72a48140352df18e8defb2a0e50' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'scopePermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '2d5286c5b6c423f34539b42bc3a86b2b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'scopeWithoutPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '516a90a6c789f655711be5f7e9a71f2c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'convertToPermissionModels',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'dffbe28b9d5e3788f67a540e1bc89493' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'filterPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'e3f141e14cfda85f05e760874ae440cf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasPermissionTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '21ae578e489740ea407eda29884188e9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasWildcardPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'c8266b7df53c66028360e22523356090' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'checkPermissionTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '5b572e7258677cde8107e3cfc0d701d0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasAnyPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '901260a8bb5ffc4d3b96699622ac72b3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasAllPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '3d5cac5cc3ff5fdaab98e5879d850b2e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasPermissionViaRole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'e3c6214d9e130992d463d43de9237bab' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasDirectPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '276750d26db7a2fc6de531f3b41dd3a0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getPermissionsViaRoles',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '7d45aa121d0cabf84123915448bfc431' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getAllPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '3c2f221d0f4481e4123b00a8e6d5307a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'collectPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'aa9e414389ad4bf593df1b4bdf695127' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'givePermissionTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '239d0bbba4394cd93a399ec921785ada' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'forgetWildcardPermissionIndex',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '77ab4a85a95f8937b9fe13d28e9a70b9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'syncPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'c8558a56cc7d112649a759a28291c957' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'revokePermissionTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '285c075d90c0b78950bd97247fadcfe1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getPermissionNames',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'fbb20edc35483403680345fcc2508b5b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getStoredPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'bf23a43c56c7461b88a45e13785b826b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'ensureModelSharesGuard',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '951091fe3f1de2bce2828b9f9be05865' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getGuardNames',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '109e0c16b74b628bf5262fd8d6a3e105' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getDefaultGuardName',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '0e34a1aa1208ff0844abea4aa2ff78f6' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'forgetCachedPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      '7ff9392f098c2f1f475d76cbb5ae2e11' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasAllDirectPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'eca62cbc7cd1fa13d748323a917d6db5' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'wildcard' => 'Spatie\\Permission\\Contracts\\Wildcard',
          'permissionattachedevent' => 'Spatie\\Permission\\Events\\PermissionAttachedEvent',
          'permissiondetachedevent' => 'Spatie\\Permission\\Events\\PermissionDetachedEvent',
          'guarddoesnotmatch' => 'Spatie\\Permission\\Exceptions\\GuardDoesNotMatch',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'wildcardpermissioninvalidargument' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionInvalidArgument',
          'wildcardpermissionnotimplementscontract' => 'Spatie\\Permission\\Exceptions\\WildcardPermissionNotImplementsContract',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'wildcardpermission' => 'Spatie\\Permission\\WildcardPermission',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasAnyDirectPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasPermissions',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasPermissions',
          3 => 'Spatie\\Permission\\Traits\\HasRoles',
          4 => NULL,
        ),
      )),
      'af632c50adc55d45c4e24d56576ee5cf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'bootHasRoles',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'b59a25568a1fc2b2a58eecc93f3b3496' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getRoleClass',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '7cebf0ceeeb424edf058ee3bb6721d24' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'roles',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '257e25f8dbf1b40b1e0a5a647e85eab3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'scopeRole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '294e2d456263a21aae3a15c1f51aec10' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'scopeWithoutRole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '0746d4c9efd1f635a7094f854d4f747d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'collectRoles',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '008499cf6940e02b61cfd015b900bd00' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'assignRole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'e4f447d9e529a0d12e67fa779878d1a3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'removeRole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '13354042a5fd54867ce267d4c331cbe8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'syncRoles',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '336a3d9c678547a9ddef1e0118e25d19' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasRole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '937d81aa7b6e9955aeb8fe9b5ea43826' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasAnyRole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '6bd5616d3b46e5d2c3f2d96117ceff93' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasAllRoles',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '00af041b452dd4797f9df3ba548a0916' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'hasExactRoles',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'e1cd6399c441d7502bd562590e6d91d8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getDirectPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '847c40b7f5109476dfe143fadf07d784' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getRoleNames',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '34e145465c0f9b9fd68b691481a0f156' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getStoredRole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '0afc11d7a3579b1b8a5b810eb56beeb1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'backedenum' => 'BackedEnum',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'permission' => 'Spatie\\Permission\\Contracts\\Permission',
          'role' => 'Spatie\\Permission\\Contracts\\Role',
          'roleattachedevent' => 'Spatie\\Permission\\Events\\RoleAttachedEvent',
          'roledetachedevent' => 'Spatie\\Permission\\Events\\RoleDetachedEvent',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'typeerror' => 'TypeError',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'convertPipeToArray',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\HasRoles',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\HasRoles',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '3b352cc9f07dfed0f0ccc133e7f28302' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'b4be122dda20a18dfac710a43f4e545f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Traits',
         'uses' => 
        array (
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'bootRefreshesPermissionCache',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
         'traitData' => 
        array (
          0 => '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php',
          1 => 'Spatie\\Permission\\Models\\Permission',
          2 => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'd6e96a9e2b1bca99cb1fda21d6a59b0c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
          'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => '__construct',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
            'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Permission',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '900a2c5cca4d812f5728f42e6175f836' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
          'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'create',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
            'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Permission',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '3ed9a613628627f2c8ee40a947378998' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
          'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'roles',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
            'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Permission',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'b483cf43269f706dc51d88b63a28f26a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
          'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'users',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
            'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Permission',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'bb31fa68f90c739fee29ee4bdbe42702' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
          'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'findByName',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
            'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Permission',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'ff94c9a71ad2f34552ea3a082a5841f3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
          'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'findById',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
            'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Permission',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'e48f4346c6f094913c01b1b0138ce3dd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
          'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'findOrCreate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
            'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Permission',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'c4a1bd158f157f7e5f5780e87485a1fb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
          'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
            'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Permission',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'cb9541e6c6d46a512d9876f7c2fa61da' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Spatie\\Permission\\Models',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
          'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
          'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
          'guard' => 'Spatie\\Permission\\Guard',
          'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
          'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
          'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
        ),
         'className' => 'Spatie\\Permission\\Models\\Permission',
         'functionName' => 'getPermission',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Spatie\\Permission\\Models',
           'uses' => 
          array (
            'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'model' => 'Illuminate\\Database\\Eloquent\\Model',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'permissioncontract' => 'Spatie\\Permission\\Contracts\\Permission',
            'permissionalreadyexists' => 'Spatie\\Permission\\Exceptions\\PermissionAlreadyExists',
            'permissiondoesnotexist' => 'Spatie\\Permission\\Exceptions\\PermissionDoesNotExist',
            'guard' => 'Spatie\\Permission\\Guard',
            'permissionregistrar' => 'Spatie\\Permission\\PermissionRegistrar',
            'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            'refreshespermissioncache' => 'Spatie\\Permission\\Traits\\RefreshesPermissionCache',
          ),
           'className' => 'Spatie\\Permission\\Models\\Permission',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
    ),
    1 => 
    array (
      '/home/marco-vega/Projects/laravel/saasbp/vendor/spatie/laravel-permission/src/Models/Permission.php' => 'e7fb6f71a875ff4fa5e50433c3e97451eb5ee8f6348892222600763d29116692',
      '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../spatie/laravel-permission/src/Traits/HasRoles.php' => 'cbc44862669acd70acd9fb85c1a7a2131ad6958b2339d17b72b3115450c8b97f',
      '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../spatie/laravel-permission/src/Traits/HasPermissions.php' => '93f2857d6e5555221874236f74832422d10626104975e4fa324a4a9de9ec1966',
      '/home/marco-vega/Projects/laravel/saasbp/vendor/composer/../spatie/laravel-permission/src/Traits/RefreshesPermissionCache.php' => '370881494ee529b47bbc1faed96282b4faf9b828a35fc32ff9c766f1f4c2f69f',
    ),
  ),
));