<?php

namespace App\Providers;

use App\Models\Beden;
use App\Models\Eticaret;
use App\Models\Renk;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $renkler = Renk::all();
        View::share('renkler',$renkler);
        $bedenler = Beden::all();
        View::share('bedenler',$bedenler);
        $urunler = Eticaret::all();
        View::share('urunler',$urunler);
    }
}
