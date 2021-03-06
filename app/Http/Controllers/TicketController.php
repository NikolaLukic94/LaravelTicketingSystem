<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Comment;
use App\Ticket;
use App\TicketImage;
use App\TicketCategory;
use App\TicketSubCategory;
use Illuminate\Http\Request;
//use RealRashid\SweetAlert\Facades\Alert;
use Alert;
use Illuminate\Support\Facades\Storage;
use Redirect,Response;
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
            'users' => User::all(),
            'tickets' => Ticket::all(),
            'categories' => TicketCategory::all(),
            'sub_categories' => TicketSubCategory::all(),            
            'images' => TicketImage::all(),
            'importance' => $this->importance,
            'comments' => Comment::all()          
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $imageName = null;
        $auth_id = Auth::user()->id;

        $ticket = Ticket::create([
            'title' =>  $request->title,
            'importance' =>  $request->importance,
            'description' => $request->description,
            'category_id' => $request->subcategory,
            'sub_category_id' => $request->subcategory,
            'user_id' => $auth_id,
            'assignee_id' => $auth_id    
        ]);
            return Response::json($ticket); 

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
