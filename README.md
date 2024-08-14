
# Laravel Deploy Package

![Laravel](https://img.shields.io/badge/Laravel-8.x-orange+?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue+?logo=php)
![License](https://img.shields.io/badge/license-MIT-brightgreen+?logo=MIT)

## Overview

The **Knackline Laravel Deploy Package** simplifies the deployment of Laravel projects using a customizable shell script. This package allows you to create and manage a deployment script that can be tailored to your specific project needs. It also supports optional integration with Laravel Horizon and Telescope.

## Features

- **Customizable Deployment Script:** Automatically generate and customize a deployment script based on your project requirements.
- **Horizon & Telescope Support:** Includes commands for Horizon and Telescope if they are installed in your project.
- **PHP Version Management:** Specify the PHP version to use during deployment, with support for versioned paths.
- **Git Branch Selection:** Define the default Git branch to deploy from.

## Installation

To install the package, run:

```bash
composer require knackline/laravel-deploy
```

After installation, you can publish the configuration file and the deployment script:

```bash
php artisan deploy:setup
```

## Usage

### Setup Deployment

To set up the deployment configuration and script, use:

```bash
php artisan deploy:setup
```

During setup, you will be prompted for:

1. **Laravel Project/Application Path:** The path to your Laravel project. If left blank, it defaults to the root of your Laravel installation.
2. **Default Git Branch:** The Git branch to deploy.
3. **PHP Version:** The PHP version to use. If left blank, it defaults to `/usr/bin/php`.

The script and configuration file will be generated based on your input.

### Running the Deployment

Once the script is generated, you can deploy your application by running:

```bash
bash deploy.sh
```

This script will:

1. Navigate to the specified project directory.
2. Fetch the latest code from the specified Git branch.
3. Install or update composer dependencies.
4. Run database migrations and other necessary commands.
5. Display a success message upon completion.

### Configuration

The configuration file (`config/deploy.php`) allows further customization:

```php
return [
    'script_path' => base_path('deploy.sh'),  // Path to the generated deployment script
    'project_path' => '/path/to/your/project',  // Path to your Laravel project
    'git_branch' => 'main',  // Default Git branch to deploy
    'php_path' => '/usr/bin/php@8.2',  // PHP executable path
];
```

You can manually adjust these settings as needed.

## Credits

  **RAJKUMAR** - [rajkumarsamra@gmail.com](mailto:rajkumarsamra@gmail.com) ([Github](https://github.com/rjsamra))


## License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).