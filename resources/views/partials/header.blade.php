<header>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName()=== 'guests.home' ? 'active' : ''}}" href="{{route('guests.home')}}" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName()=== 'guests.trains' ? 'active' : ''}}" href="{{route('guests.trains')}}">Trains</a>
                </li>
            </ul>
        </div>
    </nav>

</header>
