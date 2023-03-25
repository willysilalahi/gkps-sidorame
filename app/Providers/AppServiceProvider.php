<?php

namespace App\Providers;

use App\Models\AuthorizationModel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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
        Paginator::useBootstrap();
        Schema::defaultStringLength(200);
        if (env('APP_ENV') == 'production' || env('APP_ENV') == 'alpha') {
            \URL::forceScheme('https');
        }

        Blade::if('add_access', function () {
            $route = Route::getCurrentRoute()->uri;
            $exp = explode('/', $route);
            $route = $exp[0];
            $otorisasi = AuthorizationModel::where('roles_id', Auth::user()->roles_id)
                ->whereHas('menu', function (Builder $query) use ($route) {
                    $query->where('route', $route);
                })->whereHas('auth_type', function (Builder $query) {
                    $query->where('name', 'add');
                })->get();

            if (count($otorisasi) == 0) {
                return false;
            } else {
                return true;
            }
        });

        Blade::if('edit_access', function () {
            $route = Route::getCurrentRoute()->uri;
            $exp = explode('/', $route);
            $route = $exp[0];
            $otorisasi = AuthorizationModel::where('roles_id', Auth::user()->roles_id)
                ->whereHas('menu', function (Builder $query) use ($route) {
                    $query->where('route', $route);
                })->whereHas('auth_type', function (Builder $query) {
                    $query->where('name', 'edit');
                })->get();

            if (count($otorisasi) == 0) {
                return false;
            } else {
                return true;
            }
        });

        Blade::if('delete_access', function () {
            $route = Route::getCurrentRoute()->uri;
            $exp = explode('/', $route);
            $route = $exp[0];
            $otorisasi = AuthorizationModel::where('roles_id', Auth::user()->roles_id)
                ->whereHas('menu', function (Builder $query) use ($route) {
                    $query->where('route', $route);
                })->whereHas('auth_type', function (Builder $query) {
                    $query->where('name', 'delete');
                })->get();

            if (count($otorisasi) == 0) {
                return false;
            } else {
                return true;
            }
        });
    }
}
