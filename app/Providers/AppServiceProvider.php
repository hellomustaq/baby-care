<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use Auth;
use App\User;
use App\Caregiver;
use App\Children;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.master', function($view) {
            $userId=Auth::user()->id;
            $child=User::find($userId);
            $childrens=$child->childern;
            $view->with('childrens',$childrens);
        });

        view()->composer('caregiver.layout.master', function($view) {
            if (Auth::guard('caregiver')->check()) {
                $userId=Auth::guard('caregiver')->user()->id;
            }else{
                die('not log in as care giver');
            }
            $caregiver=Caregiver::find($userId);
            $childrens=Children::where('caregiver_id','=',$userId)->get();
            //$childrens=$caregiver->children;
            // dd($childrens);
            return $view->with('childrens',$childrens);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
