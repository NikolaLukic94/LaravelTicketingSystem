<nav class="navbar navbar-expand-md  navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <b>TSys</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest                 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>                         
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else   
                            <li class="nav-item">
                                <a class="nav-link" href="/ticket/index"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </li>                                                                        
                            <li class="nav-item">
                                <a class="nav-link" href="/ticket/create"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </li>    
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <i class="far fa-cog"></i> <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="label/index">
                                        <i class="fa fa-tag" aria-hidden="true"></i>Label
                                    </a>                                    
                                    <a class="dropdown-item" href="ticket-category/index">
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>Category
                                    </a>
                                    <a class="dropdown-item" href="ticket-sub-category/index">
                                        <i class="fas fa-list-alt"></i>Subcategory
                                    </a>
                                </div>
                            </li> 
                            @if(Auth::check()) 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-bell" aria-hidden="true"></i> <span class="caret"></span>
                                </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">                                  
                                            <a style="width:250px" class="dropdown-item text-center" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                Test notifcation
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>                                
                                @if($notifications)
                                    @foreach($notifications as $notification)
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/my-profile">
                                                <i class="fa fa-bell" aria-hidden="true"></i>Profile
                                            </a>                                    
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                Test notifcation
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    @endforeach    
                                @endif    
                            </li>                                
                            @endif                                                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/my-profile">
                                        <i class="fa fa-user" aria-hidden="true"></i>Profile
                                    </a>                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>