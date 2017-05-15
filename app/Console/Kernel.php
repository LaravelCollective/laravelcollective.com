<?php namespace Collective\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

  /**
   * The Artisan commands provided by your application.
   *
   * @var array
   */
  protected $commands = [
    'Collective\Console\Commands\RefreshDocsCommand',
  ];

  /**
   * Define the application's command schedule.
   *
   * @param  \Illuminate\Console\Scheduling\Schedule $schedule
   *
   * @return void
   */
  protected function schedule(Schedule $schedule)
  {
    $schedule->command('docs:refresh')
      ->everyFiveMinutes();
  }
}
