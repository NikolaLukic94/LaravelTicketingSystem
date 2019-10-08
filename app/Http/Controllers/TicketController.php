<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\TicketImage;
use Illuminate\Http\Request;
//use RealRashid\SweetAlert\Facades\Alert;
use Alert;
use Illuminate\Support\Facades\Storage;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * this page will only be available to admin and it will contain form for creating ticket as well as the list of all tickets
     */
    public function index()
    {  
        return view('/ticket/index', [
            'tickets' => Ticket::where('status','!=','closed')->orderBy('created_at', 'asc')->paginate(10),
            'images' => TicketImage::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * this page will be shown to users as they do not have option to see other tickets
     */
    public function create()
    {
        return view('ticket/user_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ticket::createFromRequest($request);   

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/ticket/show',[
            'ticket' => Ticket::findOrFail($id),
            'path' => Storage::get('images/' . TicketImage::findOrFail($id)->link)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return view('/ticket/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        return view('ticket/change/success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        return redirect('/ticket/index');
    }
}
