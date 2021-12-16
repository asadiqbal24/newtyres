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
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        //$schedule->command('evaluate:bonus')->
        //weekly()->mondays()->timezone('Asia/Karachi')->at('16:00');
        
        $schedule->command('f1:e1')->timezone('Asia/Karachi')->dailyAt('3:30');
        $schedule->command('f2:e2')->timezone('Asia/Karachi')->dailyAt('3:40');
        $schedule->command('f3:e3')->timezone('Asia/Karachi')->dailyAt('3:50');
        $schedule->command('f4:e4')->timezone('Asia/Karachi')->dailyAt('4:00');
        $schedule->command('f5:e5')->timezone('Asia/Karachi')->dailyAt('4:10');
        $schedule->command('f6:e6')->timezone('Asia/Karachi')->dailyAt('4:20');
        $schedule->command('f7:e7')->timezone('Asia/Karachi')->dailyAt('4:30');
        $schedule->command('f8:e8')->timezone('Asia/Karachi')->dailyAt('4:40');
        $schedule->command('f9:e9')->timezone('Asia/Karachi')->dailyAt('4:50');
        $schedule->command('f10:e10')->timezone('Asia/Karachi')->dailyAt('5:00');
        $schedule->command('f11:e11')->timezone('Asia/Karachi')->dailyAt('5:10');
        $schedule->command('f12:e12')->timezone('Asia/Karachi')->dailyAt('5:20');
        $schedule->command('f13:e13')->timezone('Asia/Karachi')->dailyAt('5:30');
        $schedule->command('f14:e14')->timezone('Asia/Karachi')->dailyAt('5:40');
        $schedule->command('f15:e15')->timezone('Asia/Karachi')->dailyAt('5:50');
        $schedule->command('f16:e16')->timezone('Asia/Karachi')->dailyAt('6:00');
        $schedule->command('f17:e17')->timezone('Asia/Karachi')->dailyAt('6:10');
        $schedule->command('f18:e18')->timezone('Asia/Karachi')->dailyAt('6:20');
        $schedule->command('f19:e19')->timezone('Asia/Karachi')->dailyAt('6:30');
        $schedule->command('f20:e20')->timezone('Asia/Karachi')->dailyAt('6:40');

        $schedule->command('weekly:bonus')->timezone('Asia/Karachi')->mondays()->at('7:00');
        
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
