<?php namespace App\Http\Controllers;

use App\Article;
use App\Photo;
use App\VideoAlbum;
use App\PhotoAlbum;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\DB;
use MaddHatter\LaravelFullcalendar\Calendar;

class HomeController extends Controller {

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
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');

		//parent::__construct();

		//$this->news = $news;
		//$this->user = $user;
	}


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

        $events = [];

        $events[] = \Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            '2015-07-07', //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
            '2015-07-07', //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg),
            1 //optional event I
        );

        $calendar = \Calendar::addEvents($events) //add an array with addEvents
        ->setOptions([ //set fullcalendar options
            'firstDay' => 1,
            'lang' => 'pt-br'
        ])/*->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            'viewRender' => 'function() {alert("Callbacks!");}'
        ])*/;


		return view('pages.home', compact('calendar'));

		//return view('pages.welcome');
	}

}