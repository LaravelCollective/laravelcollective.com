<?php namespace Collective\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Cache\Repository as Cache;

class RefreshDocsCommand extends Command {

  /**
   * @var array
   */
  protected $versions = [
    'master',
    '5.0',
    '5.1',
    '5.2',
  ];

  /**
   * The console command name.
   *
   * @var string
   */
  protected $name = 'docs:refresh';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Refresh the documentation';

  /**
   * @var Filesystem
   */
  private $files;

  /**
   * @var Cache
   */
  private $cache;

  /**
   * Create a new command instance.
   *
   * @param Filesystem $files
   * @param Cache      $cache
   */
  public function __construct(Filesystem $files, Cache $cache)
  {
    $this->files = $files;
    $this->cache = $cache;
    parent::__construct();
  }

  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function fire()
  {
    foreach($this->versions as $version)
    {
      $path = base_path('resources/docs/' . $version . '/');
      $this->info('Clearing version [' . $version . '] from [' . $path . '].');

      $this->files->deleteDirectory($path);

      $this->info('Cloning version [' . $version . '] into [' . $path . '].');

      $this->files->makeDirectory($path);
      exec('git clone git@github.com:LaravelCollective/docs.git -b ' . $version . ' ' . $path);

      $this->info('Version cloned.');
    }
  }
}
