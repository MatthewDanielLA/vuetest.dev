<?php namespace App\Http\Controllers;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Pages Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's static pages such as the NoProtocol splash screen
	|
	*/

	/**
	 * Show the splash screen for the proejct generated via Yeoman
	 *
	 * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function dobForm()
	{
		$app = app();
		return view('dobform')->with(['environment' => $app->environment()]);
	}

}
