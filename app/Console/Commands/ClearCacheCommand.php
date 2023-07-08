<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearCacheCommand extends Command
{
    protected $signature = 'clear:cache';

    protected $description = 'Clear all the cache.';

    public function handle()
    {
        $this->call('cache:clear');
        $this->call('view:clear');
        $this->call('config:clear');
        $this->call('route:clear');

        $this->info('All the cache cleared successfully!');
    }
}
