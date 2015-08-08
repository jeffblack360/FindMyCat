<?php namespace Blackj\DevStatus;

use App\Http\Controllers;

class DevStatusController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Display an object with a Welcome Status
	 *
	 * @return Response
	 */
	public function home()
	{
            return response(['Developer Status' =>
                            'Welcome to Dev Status Laravel 5 Package'
                ]);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

}
