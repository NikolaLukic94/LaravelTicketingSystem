@extends('layouts.app')

@section('content')
<body>

    <div id="app">
        <main class="py-4">
            <div class="container">
                <p>Project \ MyBoard \ InProgress</p>
                <h1><b>Board</b></h1>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" name="value" class="form-control">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Search by</button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="/">Action</a>
                            <a class="dropdown-item" href="/">Importance</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">All filters</a>
                        </div>
                    </div>
                </div>                
                <div class="input"></div>
                @if($labels)                
                    <div class="row">
                        @foreach($labels as $label)
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    {{ $label->name }}                                    
                                </div>
                                <div class="card-body text-center">
                                    @foreach($tickets as $ticket)
                                        @if($ticket->label_id == $label->id)
                                          <div class="card">
                                              <a href="#" style="padding-top: 15px;padding-bottom: 15px;">{{ $ticket->title }}</a>
                                                <img src="">   
                                        <div class="card-footer"> 
                                            <div class="row">
                                                <div id="apps">     
                                                    <example-component></example-component>
                                                </div>                                                
                                            </div>      
                                    </div>            
                                          </div>
                                          @include('ticket.modal_show')
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endif    
                </div>
                    <script type="text/javascript" src="js/app.js" defer></script>   
            </div>
        </main>
    </div>


@include('ticket.ajax_add')

@stop