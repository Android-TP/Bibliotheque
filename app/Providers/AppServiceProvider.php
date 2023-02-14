<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use App\Models\Commande;
use App\Models\Emprunt;
use App\Models\Abonnement;
use App\Models\Detail_user;
use App\Models\Role;

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
        //
        Schema::defaultStringLength(191);
        Blade::if('non_inscrit', function () {
            return Abonnement::where("user_id", "=", Auth::user()->id)->count()<=0;
        });



        Route::bind('Commande', function($value){
            return Commande::findOrFail($value);
        });

        Route::bind('Emprunt', function($value){
            return Emprunt::findOrFail($value);
        });

        Route::bind('Abonnement', function($value){
            return Abonnement::findOrFail($value);
        });

        Route::bind('Detail_user', function($value){
            return Detail_user::findOrFail($value);
        });

        Route::bind('Role', function($value){
            return Role::findOrFail($value);
        });

    }
}
