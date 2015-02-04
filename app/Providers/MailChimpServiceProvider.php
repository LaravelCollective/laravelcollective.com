<?php namespace Collective\Providers;

use Drewm\MailChimp;
use Illuminate\Support\ServiceProvider;

class MailChimpServiceProvider extends ServiceProvider {

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    $this->registerMailChimpWrapper();
  }

  /**
   * Register the MailChimp API Wrapper
   */
  protected function registerMailChimpWrapper()
  {
    $this->app->singleton('Drewm\MailChimp', function($app)
    {
      $apiKey = $app->config->get('services.mailchimp.apiKey');
      return new MailChimp($apiKey);
    });
  }
}
