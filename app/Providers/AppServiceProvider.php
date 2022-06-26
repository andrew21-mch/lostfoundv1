<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


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
        view::share('admin',DB::table('admins')->get());
        view::share('admins',DB::table('admins')->count());
        view::share('school',DB::table('schools')->get());
        view::share('schools',DB::table('schools')->count());
        view::share('items',DB::table('items')->count());
        view::share('itemss',DB::table('items')->get());
        view::share('category',DB::table('categories')->count());
        view::share('categories',DB::table('categories')->get());
        // Paginator::useBootstrap();
    }


}
