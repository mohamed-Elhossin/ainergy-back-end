  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center ">
      <div class="container d-flex align-items-center justify-content-between">

          <div id="logo">
              <h1><a href="{{ route('user.home') }}"><span>A</span>inergy</a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
          </div>

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto active" href="{{ route('user.home') }}#hero">Home</a></li>
                  <li><a class="nav-link scrollto" href="{{ route('user.home') }}#get-started">About</a></li>
                  <li><a class="nav-link scrollto" href="{{ route('user.home') }}#features">Features</a></li>


                  <li><a class="nav-link scrollto" href="{{ route('user.home') }}#timeline">TimeLine</a></li>


                  <li><a class="nav-link scrollto" href="{{ route('user.home') }}#contact">Contact</a></li>

                  @guest
                      <li><a class="nav-link text-danger link-reg " href="{{ route('login') }}">Singn In</a></li>
                      <li><a class="nav-link text-danger link-reg" href="{{ route('register') }}">Sign Up</a></li>

                  @endguest
                  @auth

                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>


                  @endauth
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
      </div>
  </header><!-- End Header -->
