<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public $agent;
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->agent = User::all()->where('type','=','agent')->pluck('organization');
        view()->composer('components.app', function($view) {
            $view->with(['agents' => $this->agent]);
        });
    }
}
