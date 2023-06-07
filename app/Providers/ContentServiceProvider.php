<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Bus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public $agent;
    public $start;
    public $end;
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
        $this->start = DB::table('buses')->distinct()->get(['start_point']);
        $this->end = DB::table('buses')->distinct()->get(['end_point']);
        view()->composer('components.app', function($view) {
            $view->with(['agents' => $this->agent, 'start' => $this->start, 'end' => $this->end]);
        });
    }
}
