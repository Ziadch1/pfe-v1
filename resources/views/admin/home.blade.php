test
	
@if (Route::has('login'))
@auth
    {{ Auth::user()->name }}
    <form method="POST" action="{{ route('logout') }}">
        @csrf
            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
    </form>
@else 
<li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>

@endauth
@endif 