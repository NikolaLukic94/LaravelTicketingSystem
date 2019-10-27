<?php

namespace App\Http\Controllers;

use App\Search\TicketSearch;
use App\Label;
use App\Ticket;
use App\User;
use Auth;
use App\TicketImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home(Request $request, Ticket $ticket)
    {
        if ($request->isMethod('post')) {

            return TicketSearch::apply($request);

        }   else    {

            return view('welcome',[
                'labels' => Label::all(),
                'tickets' => Ticket::all(),
                'notifications' => Auth::user()->notifications,
                'images' => TicketImage::all()                
            ]);
        }

    }    
}
