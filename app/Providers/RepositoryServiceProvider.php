<?php

namespace App\Providers;

    use Illuminate\Support\ServiceProvider;
    use App;

    class RepositoryServiceProvider extends ServiceProvider
    {

        /**
         * Register any error handlers.
         *
         * @return void
         */
        public function boot()
        {

        }

        /**
         * Register the service provider.
         *
         * @return void
         */
        public function register()
        {
            //
            App::bind('App\Repositories\AssetInterface', 'App\Repositories\AssetRepository');
        }

    }