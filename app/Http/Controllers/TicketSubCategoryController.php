<?php

namespace App\Http\Controllers;

use App\TicketSubCategory;
use Illuminate\Http\Request;

class TicketSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/ticket_sub_category/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket_sub_category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('/ticket_sub_category/success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TicketSubCategory  $ticketSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TicketSubCategory $ticketSubCategory)
    {
        return view('/ticket_sub_category/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TicketSubCategory  $ticketSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketSubCategory $ticketSubCategory)
    {
        return view('/ticket_sub_category/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TicketSubCategory  $ticketSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketSubCategory $ticketSubCategory)
    {
        return view('ticket_sub_category/change/success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TicketSubCategory  $ticketSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketSubCategory $ticketSubCategory)
    {
        return redirect('/ticket_sub_category/index');
    }
}
