<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-left">
      <a class="nav-item" href="/home">
        <img src="{{asset('images/logo.svg')}}" alt="CREDDI">
      </a>

    </div>
    <span class="nav-toggle" @click="toggleMobile">
      <span></span>
      <span></span>
      <span></span>
    </span>

    <div class="nav-right nav-menu" v-bind:class="{ 'is-active' : showMobile }">
      @if(\Auth::guest())
      <a href="{{ route('login') }}" class="nav-item is-tab {{is_active('login')}}">Login</a>
      <a href="{{ route('register') }}" class="nav-item is-tab {{is_active('register')}}">Register</a>
      @else
      <a class="nav-item is-tab">
        <figure class="image is-16x16" style="margin-right: 8px;">
          <img src="http://bulma.io/images/jgthms.png">
        </figure>
        Profile
      </a>
        <a class="nav-item is-tab" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      @endif
      
    </div>
  </div>
</nav>