# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/devpac/bpcalculation.svg?style=flat-square)](https://packagist.org/packages/devpac/bpcalculation)
[![Total Downloads](https://img.shields.io/packagist/dt/devpac/bpcalculation.svg?style=flat-square)](https://packagist.org/packages/devpac/bpcalculation)
![GitHub Actions](https://github.com/devpac/bpcalculation/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Package Creation
Create package from **Boiler plate**
***Website link: https://laravelpackageboilerplate.com/***

Once package folder created inside laravel project,
Extract the downloaded package inside package folder in laravel project.

Folder Structure: ***packages/<vendorname>/<packagename>/src***

After creation folder exract the package inside ***packages/<vendorname>/<packagename>/src***

In the created package **uncomment** the code in **ServiceProvider** which are used inde packge.

In laravel project ***main*** **composer.jon** file add the package path.
And also add the **Package Service Provider** in laravel project ***main*** **config/app.php** file.

And then push the package folder to git which is from **src** inside package folder.
Add the ***release*** to every commits so that the package can be flexible with ***verisons***.

Create a account in ***https://packagist.org/***
Submit the git repo url to: ***https://packagist.org/packages/submit***


## Installation

You can install the package via composer:

```bash
composer require devpac/bpcalculation
```

## Usage
Add in ***config/app.php*** file
```
Devpac\Bpcalculation\BpcalculationServiceProvider::class,
```

First Time package publishing steps:

**Note:**When new package are released check for composer current version.
         New package will install only in composer latest version
To update composer:
***Example:***
```
composer self-update --2
```

To check composer version:
```
composer
```

Never forget to:
```
php artisan optimize

php artisan config:clear

composer dump-autoload
```


### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email arunbalaji@sparkouttech.com instead of using the issue tracker.

## Credits

-   [ArunBalaji](https://github.com/devpac)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
