<?php

class BaseController extends Controller {

	public function __construct()
	{
		// Only Enable for Local Development
		if( array_key_exists('LARAVEL_ENV', $_SERVER) )
			$this->clockWorkDebug();
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	
	private function clockWorkDebug()
	{
		$this->beforeFilter(function()
		{
		    Event::fire('clockwork.controller.start');
		});

		$this->afterFilter(function()
		{
		    Event::fire('clockwork.controller.end');
		});
	}
}