<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\Breed;

class ComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
            View::composer('cats.index', function($view)
            {
                $view->with('rjb', 4237);
            });
            
            View::composer('cats.edit', function($view)
            {
                $breeds = Breed::all();
                if(count($breeds) > 0)
                {
                    $breed_options = array_combine($breeds->lists('id'),
                                                   $breeds->lists('name'));
                } 
                else
                {
                    $breed_options = array(null, 'Unspecified');
                }
                $view->with('breed_options', $breed_options);
            });

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
