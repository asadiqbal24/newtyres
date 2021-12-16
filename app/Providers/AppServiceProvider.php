<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Settings;
use App\Core\HelperFunction;
use Illuminate\Support\Facades\View;
use Auth;
use App\GlobalNotes;
use Session;
use Request;
use Illuminate\Support\Facades\Route;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


    View::composer('*', function ($view)
        {

            if(Auth::check()){

                    $app_name = Settings::where('key_term','app_name')->first();    
                    $view->with('app_name', $app_name);                                                  

                    $color_scheme = Settings::where('key_term','color_scheme')->first();    
                    $view->with('color_scheme', $color_scheme);  

                    $globalNotes = GlobalNotes::first();
                    $view->with('globalNotes', $globalNotes);
            }

        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
     
    }
}
