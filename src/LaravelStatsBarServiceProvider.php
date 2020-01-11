<?php

namespace JeevanCandy\LaravelStatsBar;

use Illuminate\Support\ServiceProvider;

class LaravelStatsBarServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/resources/views', 'laravelstatsbarviews');
		$this->loadMigrationsFrom(__DIR__.'/Database/migrations');
	}

	public function register()
	{
	}
}

?>