<?php

namespace Tiagoandrepro\Contacts\Providers;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../src/routes.php');
        $this->loadViewsFrom(__DIR__.'/../../src/views/', 'contacts');
        $this->loadMigrationsFrom(__DIR__.'/../../src/database/migrations');

    }
}
