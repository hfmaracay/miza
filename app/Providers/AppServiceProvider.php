<?php

namespace App\Providers;

use Bouncer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\{Schema, URL, App};

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Schema::defaultStringLength(191);

    Bouncer::tables([
      'abilities' => 'bouncer_abilities',
      'permissions' => 'bouncer_permissions',
      'roles' => 'bouncer_roles',
      'assigned_roles' => 'bouncer_assigned_roles',
    ]);

    // if(App::environment('production')) {
    //   URL::forceScheme('https');
    // }
  }
}
