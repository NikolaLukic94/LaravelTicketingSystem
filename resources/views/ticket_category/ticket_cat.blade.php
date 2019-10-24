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
                    <a onclick="event.preventDefault();addTicketCategoryForm();" href="#" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Category</span></a>      
                    <!--  The line event.preventDefault(); prevents the normal anchor behavior which is opening a link and addTaskForm(); calls a JavaScript function that displays our form. -->                                         
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
                        <a onclick="event.preventDefault();editTicketCategoryForm({{$ticket->id}});" href="#" class="edit open-modal" data-toggle="modal" value="{{$ticket->id}}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a onclick="event.preventDefault();deleteTicketCategoryForm({{$ticket->id}});" href="#" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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