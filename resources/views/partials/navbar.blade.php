

<div class="container-fluid">
    <nav class="p-5">
        <ul class="d-flex">
            <li class="px-5 text-uppercase {{Route::currentRouteName() === 'home' ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
            <li class="px-5 text-uppercase {{Route::currentRouteName() === 'about' ? 'active' : ''}}"><a href="{{route('about')}}">About</a></li>
            <li class="px-5 text-uppercase {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}"><a href="{{route('contacts')}}">Contacts</a></li>
            <li class="px-5 text-uppercase {{Route::currentRouteName() === 'movies' ? 'active' : ''}}"><a href="{{route('movies')}}">Movies</a></li>
        </ul>
    </nav>
</div>



