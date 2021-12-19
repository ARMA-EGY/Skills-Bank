<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Models\Logo;
use App\Models\Setting;
use App\Models\Social;

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
        $logo       = Logo::first();
        $setting    = Setting::first();
        $socials    = Social::first();
        
        $data = array(
            'logo' => $logo,
            'setting' => $setting,
        );

        View::share('setting', $setting);
    }
}
