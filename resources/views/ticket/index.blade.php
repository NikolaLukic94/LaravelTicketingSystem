@extends('layouts.app')

@section('content')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="float-left">Manage <b>Tickets</b></h2>
                </div>
                <div class="col-sm-6 mb-4">
                    <!-- Button trigger modal edit -->
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
                    <th></th>
                    <th>Importance</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <td>Assign to</td>                                                  
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                <tr>
                    <td>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </td>
                    <td>
                      <select class="browser-default custom-select">
                        <option selected>-- Select --</option>
                        @foreach($importance as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                      </select> 
                    </td>
                    <td>
                        {{$ticket->title}}
                    </td>
                    <td>
                      <select class="browser-default custom-select">
                        <option selected>{{$ticket->status}}</option>
                        <option value="1">Open</option>
                        <option value="1">Pending</option>
                        <option value="1">Closed</option>
                      </select>                                 
                    </td> 
                    <td>                 
                    @foreach($images as $image)
                        @if($image->ticket_id == $ticket->id)
                            <a onclick="event.preventDefault();viewImage();" href="#"><img id="myImg" src="/images/{{$image[0]->link}}" style="width:100px;height:60px;"></a>
                            @include('layouts.partials.ticket.modal')
                        @else
                        /
                        @endif                            
                    @endforeach
                    </td> 
                    <td>
                    @if($ticket->created_at)
                      {{$ticket->created_at->diffForHumans()}}
                    @else
                      nothing here :/  
                    @endif  
                    </td>
                    <td>
                      <select class="browser-default custom-select">
                        <option selected>User list</option>
                        <option value="1">One</option>
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                      </select>                                 
                    </td>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#saveChangesModal">
                          <i class="fas fa-save"></i>        
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
@include('ticket.saveChangesModal')
@include('ticket.ajax_add')
@include('ticket.ajax_edit')
@include('ticket.ajax_delete')
@include('ticket.modal_show')

@stop

