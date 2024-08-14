<?php

namespace Knackline\LaravelDeploy\Commands;

use Illuminate\Console\Command;

class DeployCommand extends Command
{
    protected $signature = 'deploy';
    protected $description = 'Deploy the application using the configured shell script.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $scriptPath = config('deploy.script_path');
        if (!file_exists($scriptPath)) {
            $this->error('Deploy script not found!');
            return 1;
        }

        $this->info('Running deploy script...');
        $output = shell_exec("sh $scriptPath");

        $this->info($output);
        return 0;
    }
}
