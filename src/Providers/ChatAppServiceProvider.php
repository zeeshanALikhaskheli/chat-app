<?php

namespace Zeeshan\ChatApp\Providers;

use Illuminate\Support\ServiceProvider;

class ChatAppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        
        // Load views
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'chat-app');
        
        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        
        // Publish assets/config
        $this->publishes([
            __DIR__.'/../../config/chat-app.php' => config_path('chat-app.php'),
            __DIR__.'/../../public' => public_path('vendor/chat-app'),
        ]);
    }
    
    public function register()
    {
        // Merge config
        $this->mergeConfigFrom(
            __DIR__.'/../../config/chat-app.php', 'chat-app'
        );
    }
}