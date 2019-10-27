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