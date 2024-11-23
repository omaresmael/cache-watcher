<?php
namespace Omaresmael\CacheWatcher;
use Illuminate\Support\ServiceProvider;
use Omaresmael\CacheWatcher\Commands\CacheWatcher;

class CacheWatcherServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->commands([
            CacheWatcher::class
        ]);
    }

}