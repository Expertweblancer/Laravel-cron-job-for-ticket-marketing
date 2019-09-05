<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'App\Console\Commands\RegisteredUsers',
        'App\Console\Commands\RegisteredTickets',
        'App\Console\Commands\RegisteredWebticket',
        'App\Console\Commands\RegisteredFlyticket',
        'App\Console\Commands\RegisteredEtix',
        'App\console\Commands\ResaledEtix',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('registered:users')->everyMinute();
        $schedule->command('registered:eventbrite')->everyMinute();
        $schedule->command('registered:ticketweb')->everyMinute();
        $schedule->command('registered:flyticket')->everyMinute();
        $schedule->command('registered:etix')->everyMinute();
        $schedule->command('resaled:etix')->everyMinute();
        // $schedule->command('inspire')
        //          ->hourly();
    }

    protected function scheduleTimezone()
    {
        return 'America/New_York';
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
