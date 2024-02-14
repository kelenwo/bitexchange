<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    
        
        // Add this to the schedule method in App\Console\Kernel.php
    protected function schedule(Schedule $schedule)
    {
        $schedule->call([TaskController::class, 'updateEarnings'])->everyMinute();
    }

    /**
     * Define the application's command schedule.
     
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
