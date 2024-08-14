<?php

namespace Knackline\LaravelDeploy;

use Illuminate\Support\ServiceProvider;

class DeployServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/deploy.php', 'deploy');
        $this->commands([
            \Knackline\LaravelDeploy\Commands\DeployCommand::class,
            \Knackline\LaravelDeploy\Commands\SetupDeploymentCommand::class,
        ]);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Config/deploy.php' => config_path('deploy.php'),
            __DIR__ . '/../resources/deploy.sample.sh' => base_path('deploy.sh'),
        ], 'deploy-config');
    }
}
