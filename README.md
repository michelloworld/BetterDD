Laravel 4 - BetterDD
===================

A package for Laravel 4 to dump the given variable. It much better than dd function in Laravel Helpers. **Clean and Readable**

Example Usage:
------------------
```
// debug() function doesn't end execution of the script. You have to use exit or die function after debug.
debug($value);

OR

ddd($value);
```

Example Result:
------------------
![BetterDD Example](https://raw.githubusercontent.com/michelloworld/BetterDD/master/betterdd_example.png)

Installation
-------------

Add BetterDD as a requirement to composer.json:
```
{
  ...
  "require": {
    ...
    "mic/better-dd": "dev-master"
    ...
  },
}
```

Update composer:
```
    php composer.phar update
```

Add the provider to your app/config/app.php:
```
  'providers' => array(
  
    ...
    
    'Mic\BetterDD\BetterDDServiceProvider',
    
  ),
```
