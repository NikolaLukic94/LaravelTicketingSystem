@extends('layouts.app')


@section('content')


<form action="/ticket-category/create" method="POST" id="frmAddTicketCategory">
{{ csrf_field() }}
    <div class="container">
        <div class="col-md-5">
            <div class="field">
                <div class="row">
                    <div class="col">
                        <label class="label" for="name">
                            Name
                        </label>
                    </div>
                    <div class="col">
                        <input name="name" type="text" class="input" id="name" required>
                    </div>
                    <button type="submit" id="btn-add class="btn btn-outline-secondary">Save</button>
                </div>
            </div> 
        </div>
    </div>
</form>


@stop