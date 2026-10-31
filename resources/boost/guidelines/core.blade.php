## knackline/laravel-deploy

Generates a shell deploy script and runs it via Artisan. App-facing API is only two commands: `deploy:setup` and `deploy`.

### Commands

@verbatim
<code-snippet name="Setup and deploy" lang="bash">
php artisan deploy:setup
php artisan deploy
</code-snippet>
@endverbatim

`deploy:setup` writes `config/deploy.php` and executable `deploy.sh` (git hard reset, composer install, migrate --force). Customize `deploy.sh` after setup; do not invent new Artisan commands. Never call `deploy` from an HTTP controller.

For setup prompts, script behavior, pitfalls, and filing GitHub issues for missing features or bugs, activate the `laravel-deploy` skill. When this package cannot satisfy a requested feature, bug, or support need, follow that skill’s issue-filing steps and open an issue on `Knackline/laravel-deploy`.
