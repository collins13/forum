<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      if ($this->app->environment() == 'local') {
        $this->app->register('Appzcoder\CrudGenerator\CrudGeneratorServiceProvider');
    }

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringlength(191);
    }
}
