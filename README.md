## crestapps-bootstrap4-templates

# Bootstrap 4 templates for the excellent code Generator from CrestApps

* Install Laravel
* Install a version of crestApps/laravel-code-generator
* Install the same version for ybansan/crestapps-bootstrap4-templates
Example:
```
composer require ybansan/crestapps-bootstrap4-templates:2.2
```
* Copy the templates from the vendor/ybansan/templates directory to the templates directory of the crestApps generator.
* Modify the code generator configuration file (laravel-code-generator.php) and including this code (see example in the the project config folder):
```php
    'laravel_collective_templates' => [
        'default-collective',
        'collective-bootstrap4',
    ],
```
* Generate the ressources from command line including the Bootstrap 4 template in parameter.
Example:
```
php artisan create:resources Foo --template-name=default-collective-bootstrap4
```	
Since **Glyphicons** were dropped from Bootstrap 4 these templates use **Fonts Awesome** instead.

My Bootrstrap 4 templates were made from a copy of the Bootrstrap 3 CrestApps templates which I modified some files.
Compared to CrestApps template only a few files changed:
* create.blade.stub
* edit.blade.stub
* index.blade.stub
* layout.stub
* layout-with-validation.stub
* show.blade.stub
