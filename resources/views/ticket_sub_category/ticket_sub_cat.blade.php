@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Ticket Subcategories</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a onclick="event.preventDefault();addTicketSubCategoryForm();" href="#" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Ticket Subcategory</span></a>                                               
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task</th>
                        <th>Created At</th>
                        <th>Description</th>
                        <th>Done</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ticket_sub_cat as $tsc)
                    <tr>
                        <td>{{$tsc->name}}</td>
                        <td>
                            <a onclick="event.preventDefault();editTicketSubCategoryForm({{$tsc->id}});" href="#" class="edit open-modal" data-toggle="modal" value="{{$tsc->id}}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a onclick="event.preventDefault();deleteTicketSubCategoryForm({{$tsc->id}});" href="#" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
    @include('ticket_sub_category.ajax_add')
    @include('ticket_sub_category.ajax_edit')
    @include('ticket_sub_category.ajax_delete')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/ticket_sub_category.js')}}"></script>

@stop
