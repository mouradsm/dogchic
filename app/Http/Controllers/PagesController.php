<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

   public function home(){
       return view('pages.home');
   }

   public function agenda(){
       return view('pages.agenda');
   }
}
