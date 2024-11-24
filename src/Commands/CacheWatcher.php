<?php

namespace Omaresmael\CacheWatcher\Commands;

use Illuminate\Console\Command;
use Spatie\Watcher\Watch;
use Symfony\Component\Process\Process;

class CacheWatcher extends Command
{
    private Process $process;

    protected $signature = 'cache:watch';

    protected $description = 'Watch the cacheable files and refresh them on change';

    public function handle(): void
    {

        $this->components->info('Cacheable files [config, routes, events] are being monitored for any change...' );
        $this->process = Process::fromShellCommandline('php artisan optimize');
        Watch::paths($this->getCacheableFilePaths())
            ->onAnyChange(function (string $event, string $path) {
                $this->components->warn("Detected a change in $path");
                $this->process->run();
                $this->components->success('The Cached Files have been refreshed');
            })
            ->start();

    }

    private function getCacheableFilePaths(): array
    {
       return [
           config_path(),
           base_path('routes'),
           app_path('Events'),
       ];
    }

}