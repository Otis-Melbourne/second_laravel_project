<?php

namespace App\Providers;

use App\Events\PostCreatedEvent;
use App\Listeners\PostCreatedListener;
use App\Policies\PostPolicy;
use App\Test;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('test', function(){
            return new Test();
        });
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(
            PostCreatedEvent::class,
            PostCreatedListener::class,
        );
    }
}
