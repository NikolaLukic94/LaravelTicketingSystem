<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TSys') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/">  
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">    
    <link href="{{ asset('js/ticket_category.js') }}" rel="stylesheet">   
    <link href="{{ asset('js/open_img.js') }}" rel="stylesheet">      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/tasks.js')}}"></script> 

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="sweetalert2.min.js"></script>
    @include('sweetalert::alert')
</head>
<body>
    <div id="app">
        @include('layouts/partials/nav')
        <main class="py-4">
            <div class="container">
                <h1><b>Board</b></h1>
                <form action="/" method="post">
                {{ csrf_field() }}
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" name="value" class="form-control">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Search by</button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="/">Action</a>
                            <a class="dropdown-item" href="/">Importance</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
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
                                              <a href="/ticket/show/{{$ticket->id}}">{{ $ticket->title }}</a>
                                                <img src="">                                              
                                          </div>
                                        @endif
                                    @endforeach
                                </div>

                                <div class="card-footer">

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endif    
                </div>
            </div>
        </main>
    </div>
</body>
</html>
