@extends('layouts.app')

@section('content')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Ticket Categories</b></h2>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTicketModal">
                      <i class="material-icons">&#xE147;</i> 
                       <span>Add New Ticket</span>
                    </button>                                         
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                <tr  id="list">
                    <td>{{$ticket->name}}</td>
                    <td>{{$ticket->created_at->diffForHumans()}}</td>
                    <td>
                        <!-- Button trigger modal edit -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                          <i class="fas fa-edit"></i>
                        </button>                                 
                        <!-- Button trigger modal delete -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal">
                          <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                        </button>                         
                        <!-- Button trigger modal see -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          <i class="fa fa-eye material-icons"></i>
                        </button>  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text">Showing <b></b> out of <b></b> entries</div>
        </div>

    </div>
</div>
@include('ticket_category.ajax_add')
@include('ticket_category.ajax_edit')
@include('ticket_category.ajax_delete')
    
@stop