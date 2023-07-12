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
                      <li><a class="nav-link scrollto " href="{{ route('user.category') }}#category">Categories</a></li>
                      <li><a class="nav-link scrollto " href="{{ route('user.allServices') }}#services">All Services</a>
                      </li>

                      @if (Auth::user()->type == 'vendor')
                          @if (Auth::user()->status == 'active')
                              <li class="dropdown"><a href="#"> Services
                                      <i class="bi bi-chevron-down"></i></a>
                                  <ul>
                                      <li><a class="nav-link scrollto"
                                              href="{{ route('services.yourServices') }}#services">
                                              Your Services</a>
                                      </li>
                                      <li><a class="nav-link scrollto"
                                              href="{{ route('services.createPage') }}#createServices">
                                              Create Services</a>
                                      </li>
                                  </ul>
                              </li>
                          @else
                              <li class="dropdown text-danger "><a @disabled(true)> Not Active
                                   </a>
                              </li>
                          @endif
                      @endif


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
