<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Gategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $categoriesMenu = Category::all();
        // view()->share('categoriesMenu', $categoriesMenu);
        }
}
