<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use MaddHatter\LaravelFullcalendar\Calendar;
use App\Event;

class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

   public function home(){
       return redirect('agenda');
   }

   public function agenda(){
       $banhosClubinho = Event::where('class', '=','1')->get();
       $banhosAvulsos  = Event::where('class', '=','2')->get();

       $calendar = \Calendar::addEvents($banhosClubinho,['color' => '#800'])
           ->addEvents($banhosAvulsos,['color' => '#880'])
           ->setOptions([ //set fullcalendar options
               'firstDay' => 1,
               'lang' => 'pt-br',
               'height'=> 800
           ])/*->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            'viewRender' => 'function() {alert("Callbacks!");}'
        ])*/;

       return view('pages.agenda', compact('calendar'));
   }

    public function clientes(){
        return view('pages.clientes');
    }
}
