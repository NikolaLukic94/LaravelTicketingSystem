<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<!-- 
<meta name="csrf-token" content="{{ csrf_token() }}"> sets the Laravel CSRF token as a header meta value. We will need this value when performing AJAX operations
-->
<body>
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
                    <tr>
                        <td>{{$ticket->name}}</td>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/ticket_category.js')}}"></script>
</body>
