<?php
namespace App\Providers;
use App\Http\View\ProductCountComposer;
use App\Http\View\UserCountComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', ProductCountComposer::class);
        View::composer('*', UserCountComposer::class);
    }
}
