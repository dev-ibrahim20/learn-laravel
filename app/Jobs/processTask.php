<?php

namespace App\Jobs;

use DateTime;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Log;

class processTask implements ShouldQueue
{
    use Queueable, Batchable;
    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        
    }

    public function handle(): void
    {
        Log::info('First Task');
    }
}
