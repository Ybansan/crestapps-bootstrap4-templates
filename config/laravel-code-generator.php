<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CodeGenerator config overrides
    |--------------------------------------------------------------------------
    |
    | It is a good idea to sperate your configuration form the code-generator's
    | own configuration. This way you won't lose any settings/preference
    | you have when upgrading to a new version of the package.
    |
    | Additionally, you will always know any the configuration difference between
    | the default config than your own.
    |
    | To override the setting that is found in the codegenerator.php file, you'll
    | need to create identical key here with a different value
    |
    | IMPORTANT: When overriding an option that is an array, the configurations
    | are merged together using php's array_merge() function. This means that
    | any option that you list here will take presence during a conflict in keys.
    |
    | EXAMPLE: The following addition to this file, will add another entry in
    | the common_definitions collection
    |
    |   'common_definitions' =>
    |   [
    |       [
    |           'match' => '*_at',
    |           'set' => [
    |               'css-class' => 'datetime-picker',
    |           ],
    |       ],
    |   ],
    |
     */

    /*
    |--------------------------------------------------------------------------
    | The default path of where the uploaded files live.
    |--------------------------------------------------------------------------
    |
    | You can use Laravel Storage filesystem. By default, the code-generator
    | uses the default file system.
    | For more info about Laravel's file system visit
    | https://laravel.com/docs/5.5/filesystem
    |
     */
    'files_upload_path' => 'uploads',

    /*
    |--------------------------------------------------------------------------
    | The default path where the templates are located.
    |--------------------------------------------------------------------------
    |
    | In this path, you can add more templates.
    |
     */
    'template' => 'default-collective-bootstrap4',

    /*
    |--------------------------------------------------------------------------
    | Array of templates that should be generated with Laravel-Collective.
    |--------------------------------------------------------------------------
    |
    | If you want to generate code by using laravel-collective, you must first
    | install the package. Then add the tamplate name that should be using
    | Laravel-Collective extensions when generating code.
    |
     */
    'laravel_collective_templates' => [
        'default-collective',
        'default-collective-bootstrap4',
    ],

];
