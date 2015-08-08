<?php namespace App\Handlers\Events;

use App\Events\TestEvent;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Support\Facades\Log;

class TestEventListener {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  TestEvent  $event
	 * @return void
	 */
	public function handle(TestEvent $event)
	{
//            dd($event);
            Log::debug("*** TestEvent fired! --> " . $event->rjb);
	}

}
