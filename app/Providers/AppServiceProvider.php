<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register ()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot ()
    {
        //
        //Paginator::useBootstrap();

        \Illuminate\Support\Collection::macro('incrementTen',function (){
            return $this->map(function ($item){
                return $item+10;
            });
        });



    }
}
