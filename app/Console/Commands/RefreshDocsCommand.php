<?php namespace Collective\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Cache\Repository as Cache;

class RefreshDocsCommand extends Command {

  /**
   * @var array
   */
  protected $versions = [];

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

    $this->versions = array_keys(config('versions.collection'));
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
      $zip = base_path('resources/docs/' . $version . '.zip');
      $docsPath = base_path('resources/docs/');
      $path = base_path('resources/docs/' . $version . '/');

      $this->info('Clearing version [' . $version . '] from [' . $path . '].');

      $this->files->delete($zip);
      $this->files->deleteDirectory($path);

      $this->info('Downloading version [' . $version . '] archive.');

      exec('wget -O ' . $zip . ' https://github.com/LaravelCollective/docs/archive/' . $version . '.zip');

      $this->info('Extracting version [' . $version . '] into [' . $path . '].');

      $archive = new \ZipArchive();
      $archive->open($zip);
      $archive->extractTo($docsPath);
      $archive->close();

      $this->files->move($docsPath . 'docs-' . $version, $path);
      $this->files->delete($zip);

      $this->info('Version cloned.');
    }
  }
}
