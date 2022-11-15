<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Order;
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
        // Если композер реализуется в функции-замыкании:

        $boxSize = 0;

        View::composer('layouts.sidebar.categories',
            function (\Illuminate\View\View $view) {
                return $view
                    ->with('categories', Category::all());
            });

        View::composer('*',
            function (\Illuminate\View\View $view) use ($boxSize) {
                $id = \Auth::id();
                if ($id) {
                    $currentOrder = Order::getCurrentOrder($id);
                    if ($currentOrder) {
                        $boxSize = sizeof($currentOrder->goods);
                    }
                }

                return $view
                    ->with('boxSize', $boxSize);
            });
    }

}
