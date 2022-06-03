<nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ route('index') }}">
            <span>
              Affitta casa
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
                
                @if( Request::is('index'))
               <li class="nav-item active">
                @else
                <li class="nav-item">
                @endif
                    <a class="nav-link" href="{{ route('index') }}"> Home </a>
                </li>
                
                @if( Request::is('catalogo'))
                <li class="nav-item active">
                @else
                <li class="nav-item">
                @endif
                    <a class="nav-link" href="{{ route('catalogo') }}"> Catalogo</a>
                </li>
                
                @if( Request::is('about'))
                <li class="nav-item active">
                @else
                <li class="nav-item">
                @endif
                    <a class="nav-link" href="{{ route('about') }}"> About</a>
                </li>
                
                
                @if( Request::is('why'))
                <li class="nav-item active">
                @else
                <li class="nav-item">
                @endif
                    <a class="nav-link" href="{{ route('why') }}"> Why Us</a>
                </li>
                
                @if( Request::is('faq'))
                <li class="nav-item active">
                @else
                <li class="nav-item">
                @endif
                    <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                </li>
                
                
                
            @if(isset(Auth::user()->nome))
                @if( Request::is('chat'))
                <li class="nav-item active">
                @else
                <li class="nav-item">
                @endif
                    <a class="nav-link" href="">Chat</a>
                </li>
                
                
                @if( Request::is('profile'))
                <li class="nav-item active">
                @else
                <li class="nav-item">
                @endif
                    <a class="nav-link" href="{{ route('profile')}}">Profilo</a>
                </li>
              
                    @if('Locatore'==(Auth::user()->tipo))
                @if( Request::is('annunci'))    
                <li class="nav-item active">
                @else
                <li class="nav-item">
                @endif
                  <a class="nav-link" href="{{route('annunci')}}">Annunci</a>
              </li>
                    @endif
            @endif
            </ul>
              
            @if(isset(Auth::user()->nome))
              <div class="quote_btn-container">
                <a href="{{ route('homeutente') }}" class="quote_btn">
                  {{ Auth::user()->nome }}
                </a>
              </div>
              &nbsp
              <div class="quote_btn-container">
                <a href="{{ route('logout') }}" class="quote_btn">
                  LOGOUT
                </a>
              </div>
            @else
              <div class="quote_btn-container">
                <a href="{{ route('login') }}" class="quote_btn">
                  LOG IN
                </a>
              </div>
              &nbsp;
              <div class="quote_btn-container">
                <a href="{{ route('signup') }}" class="quote_btn">
                  SIGN UP
                </a>
              </div>
            @endif

          </div>
        </nav>

