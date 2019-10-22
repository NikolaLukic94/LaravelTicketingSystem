@extends('layouts.app')
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
@section('content')
<!-- 
<meta name="csrf-token" content="{{ csrf_token() }}"> sets the Laravel CSRF token as a header meta value. We will need this value when performing AJAX operations
-->
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="float-left">Manage <b>Tickets</b></h2>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <a onclick="event.preventDefault();addTicketForm();" href="#" class="btn btn-success float-right" data-toggle="modal"><i class="material-icons">&#xE147;</i> 
                          <span>Add New Ticket</span>
                        </a>      
                        <!--  The line event.preventDefault(); prevents the normal anchor behavior which is opening a link and addTaskForm(); calls a JavaScript function that displays our form. -->                                   
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
                            <option selected>{{$ticket->importance}}</option>
                            @foreach($importance as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                          </select> 
                        </td>
                        <td>{{$ticket->title}}</td>
                        <td>
                          <select class="browser-default custom-select">
                            <option selected>{{$ticket->status}}</option>
                            <option value="1">Open</option>
                            <option value="1">Pending</option>
                            <option value="1">Closed</option>
                          </select>                                 
                        </td>                                            
                        @if($images->where('ticket_id', $ticket->id))
                            <td><a onclick="event.preventDefault();viewImage();" href="#"><img id="myImg" src="/images/{{$images[0]->link}}" style="width:100px;height:60px;"></a></td> 
                            @include('layouts.partials.ticket.modal')                            
                        @endif
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
                            <a onclick="event.preventDefault();editTicketForm({{$ticket->id}});" href="#" class="edit open-modal" data-toggle="modal" value="{{$ticket->id}}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a onclick="event.preventDefault();deleteTicketForm({{$ticket->id}});" href="#" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            <a onclick="event.preventDefault();showTicketModal({{$ticket->id}});" href="#" class="edit open-modal" data-toggle="modal" value="{{$ticket->id}}"><i class="fa fa-eye material-icons" data-toggle="tooltip" aria-hidden="true"></i></a>
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
    @include('ticket.ajax_add')
    @include('ticket.ajax_edit')
    @include('ticket.ajax_delete')
    @include('ticket.show')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/ticket.js')}}"></script>
</body>

@stop