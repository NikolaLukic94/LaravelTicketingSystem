@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        @include('layouts.partials.ticket.list')
        <div class="col-md-4">
            <form action="/ticket/create" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Title
                            </label>
                        </div>
                        <div class="col">
                            <input name="title" type="text" class="input" id="title" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Importance
                            </label>
                        </div>
                        <div class="col">
                            <input name="importance" type="text" class="input" id="importance" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Category
                            </label>
                        </div>
                        <div class="col">
                            <input name="category" type="text" class="input" id="category" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Subcategory
                            </label>
                        </div>
                        <div class="col">
                            <input name="subcategory" type="text" class="input" id="subcategory" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Image
                            </label>
                        </div>
                        <div class="col">
                            <input name="image" type="file" class="input" id="image">
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="name">
                                Description
                            </label>
                        </div>
                        <div class="col">
                            <input name="description" type="text" class="description" id="name" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-secondary">Save</button>                
            </form>
        </div>
    </div>  
</div>

@stop
