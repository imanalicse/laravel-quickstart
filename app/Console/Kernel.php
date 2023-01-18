<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // */2 * * * * - even minute
        // 1-59/2 * * * * - odd minute
        $schedule->command("video:process")->everyFiveMinutes()->withoutOverlapping()->runInBackground()->appendOutputTo(storage_path('/logs/video_process.log'));
        $schedule->command("video:process")->everyThreeMinutes()->withoutOverlapping()->runInBackground()->appendOutputTo(storage_path('/logs/video_process2.log'));
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
