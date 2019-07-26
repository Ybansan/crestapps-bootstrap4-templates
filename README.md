## Introduction
Bootstrap 4 templates for the excellent Laravel Code Generator from CrestApps (https://crestapps.com/). These templates are simply an update of some files from the Code Generator default templates.

## Installation
Version 2.3 of this package (crestapps-bootstrap4-templates) should work with versions >= 2.2.11 and <= 2.3.2 of the Code Generator. It was not tested with greater versions.
Your Laravel project should have crestapps/laravel-code-generator package already installed.

1. To download this package into your laravel project, use the command-line to execute the following command:

	```
    composer require ybansan/crestapps-bootstrap4-templates:2.3.1 --dev
    ```

2. Publish the package templates using the command line:

    ```
    php artisan vendor:publish --provider="Ybansan\CrestappsBootstrap4Templates\CrestTemplatesServiceProvider"
    ```

3. Update the Code Generator custom config

    * Edit the config file: [your_project_folder]\config\codegenerator_custom.php
    * Add this key:

    ```
    'laravel_collective_templates' => [
        'default-collective',
        'default-collective-bootstrap4',
    ],
    ```

4. Use the template as a parameter for the Code Generator generating resources from the command line. Example:

    ```
    php artisan create:resources Foo --template-name=collective-bootstrap4
    php artisan create:layout MyApp --template-name=collective-bootstrap4
    ```

The package contains two templates wich names are:

* bootstrap4
* collective-bootstrap4

Since **Glyphicons** were dropped from Bootstrap 4 the templates now use **Fonts Awesome** instead.

To create the Bootstrap 4 templates only a few files have been modified. The package contains only the modified files:

* create.blade.stub
* edit.blade.stub
* form-helper-field.blade.stub
* index.blade.stub
* layout.stub
* layout-with-validation.stub
* show.blade.stub

The other files are the same as those of the default code generator templates. You will need to copy them in addition if you want to publish the package manually.
