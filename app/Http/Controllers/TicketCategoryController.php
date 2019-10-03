<?php

namespace App\Http\Controllers;

use App\TicketCategory;
use Illuminate\Http\Request;

class TicketCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/ticket_category/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket_category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('/ticket_category/success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TicketCategory $ticketCategory)
    {
        return view('/ticket_category/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketCategory $ticketCategory)
    {
        return view('/ticket_category/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketCategory $ticketCategory)
    {
        return view('ticket_category/change/success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketCategory $ticketCategory)
    {
        return redirect('/ticket_category/index');
    }
}
