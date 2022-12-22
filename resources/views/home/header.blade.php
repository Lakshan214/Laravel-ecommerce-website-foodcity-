<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="{{url('/')}}" class="logo d-flex align-items-center me-auto me-lg-0">
    
      <h1>Smart<span>Way</span></h1>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
       
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('show-cart')}}">cart </a></li>
        <li><a href="{{url('show-order')}}">order</a></li>
        
        
       
        
        @if (Route::has('login'))

        @auth
        <li><x-app-layout>
       </x-app-layout></li>

        @else
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Sign in</a></li>
       @endauth
       @endif
        
        
      </ul>
    </nav><!-- .navbar -->

    <a class="btn-book-a-table" href="{{url('viewAllProduct')}}">Product</a>
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header>