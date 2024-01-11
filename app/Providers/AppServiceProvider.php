<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
        view()->composer('*', function ($view){
            $menuCategories = Category::all();
            $auth_user = Auth::id();
            $view->with([
                'auth_user' => $auth_user, 
                'menuCategories' => $menuCategories, 
            ]);
        });
    }
}
