@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Ticket Subcategories</b></h2>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <!-- Button trigger modal edit -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                          <i class="material-icons">&#xE147;</i> 
                           <span>Add New Ticket</span>
                        </button>                                                     
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ticket_sub_cat as $tsc)
                    <tr>
                        <td>{{$tsc->id}}</td>
                        <td>{{$tsc->name}}</td>
                        <td>{{$tsc->created_at->diffForHumans()}}</td>
                        <td>
                        <!-- Button trigger modal edit -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal1">
                          <i class="fas fa-edit"></i>
                        </button>                                 
                        <!-- Button trigger modal delete -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal">
                          <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
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
    @include('ticket_sub_category.ajax_add')
    @include('ticket_sub_category.ajax_edit')
    @include('ticket_sub_category.ajax_delete')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/ticket_sub_category.js')}}"></script>

@stop
