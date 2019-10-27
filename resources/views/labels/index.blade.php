@extends('layouts.app')

@section('content')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Labels</b></h2>
                </div>
                <div class="col-sm-6 mb-4">
                    <!-- Button trigger modal edit -->
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addLabelModal">
                      <i class="material-icons">&#xE147;</i> 
                       <span>Add New Label</span>
                    </button>                                                     
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="text-center">Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($labels as $ticket)
                <tr>
                    <td>{{$ticket->name}}</td>
                    <td class="text-center">{{$ticket->created_at->diffForHumans()}}</td>
                    <td class="pull-right">
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
@include('labels.add')
@include('labels.edit')
@include('labels.delete')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('js/label.js')}}"></script>


@stop