<?php
namespace Omaresmaeel\CacheWatcher;
use Illuminate\Support\ServiceProvider;
use Omaresmaeel\CacheWatcher\Commands\CacheWatcher;

class CacheWatcherServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->commands([
            CacheWatcher::class
        ]);
    }

}