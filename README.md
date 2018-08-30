## crestapps-bootstrap4-templates

# Bootstrap 4 templates for the excellent code Generator from CrestApps

* Install Laravel
* Install a version of crestApps/laravel-code-generator (https://crestapps.com/)
* Publish the laravel-code-generator resources (config and templates, see the package documentation)
* Install the same version for ybansan/crestapps-bootstrap4-templates

Example:
```
composer require ybansan/crestapps-bootstrap4-templates:^2.2 --dev
```
* Publish the package templates

To publish the simple bootstrap4 template :
```
php artisan vendor:publish --provider="Ybansan\CrestappsBootstrap4Templates\CrestTemplatesServiceProvider" --tag="bootstrap4"
```

To publish the collective bootstrap4 template :
```
php artisan vendor:publish --provider="Ybansan\CrestappsBootstrap4Templates\CrestTemplatesServiceProvider" --tag="collective-bootstrap4"
```
* Generate the ressources and the layout with the laravel-code-generator from command line indicating the template of your choice in a parameter.

Example:
```
php artisan create:resources Foo --template-name=collective-bootstrap4
php artisan create:layout MyApp --template-name=collective-bootstrap4
```	
Since **Glyphicons** were dropped from Bootstrap 4 the templates now use **Fonts Awesome** instead.

Bootrstrap 4 templates were made from a copy of the default Bootrstrap 3 CrestApps templates, which only some files were modified.
Compared to CrestApps template these files changed:
* create.blade.stub
* edit.blade.stub
* index.blade.stub
* layout.stub
* layout-with-validation.stub
* show.blade.stub
