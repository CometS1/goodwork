<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'project'    => 'App\Models\Project',
            'team'       => 'App\Models\Team',
            'office'     => 'App\Models\Office',
            'task'       => 'App\Models\Task',
            'event'      => 'App\Models\Event',
            'discussion' => 'App\Models\Discussion',
            'user'       => 'App\Models\User',
            'comment'    => 'App\Models\Comment',
        ]);
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
