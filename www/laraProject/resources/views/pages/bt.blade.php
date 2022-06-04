<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="hero_area2">
    <header class="header_section">
        <div class="container-fluid">
            <!-- Navtest -->
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
                        <!-- Route Index -->
                        @include('includes/navItem/onlyRoute', ['route'=>'index'], ['value'=>'Home'])
                        <!-- Route Catalogo -->
                        @include('includes/navItem/onlyRoute',  ['route'=>'catalogo'], ['value'=>'Catalogo'])

                        @if(isset(Auth::user()->nome))
                        @else
                            <!-- Route About -->
                            @include('includes/navItem/onlyRoute',  ['route'=>'about'], ['value'=>'About'])
                            <!-- Route Why -->
                            @include('includes/navItem/onlyRoute',  ['route'=>'why'], ['value'=>'Why Us'])
                        @endif
                        <!-- Route Faq -->
                        @include('includes/navItem/onlyRoute',  ['route'=>'faq'], ['value'=>'FAQ'])
                        <!-- Route Chat -->
                        @if(isset(Auth::user()->nome))
                            @if('locatario'==(Auth::user()->tipo)||'locatore'==(Auth::user()->tipo))
                                @include('includes/navItem/onlyRoute',  ['route'=>'chat'], ['value'=>'Chat'])
                            @endif
                        @endif


                        <!-- Route Annunci -->
                        @if(isset(Auth::user()->nome))
                            @if('locatore'==(Auth::user()->tipo))
                                @include('includes/navItem/onlyRoute',  ['route'=>'annunci'], ['value'=>'Annunci'])
                                @endif
                            @endif
                        <!-- Route Statistiche -->
                        @if(isset(Auth::user()->nome))
                            @if('admin'==(Auth::user()->tipo))
                                @include('includes/navItem/onlyRoute',  ['route'=>'stats'], ['value'=>'Statistiche'])
                                @endif
                            @endif


                    </ul>
                    <!-- Login/Register Route -->
                    @if(isset(Auth::user()->nome))
                        @include('includes/navItem/rightSection',  ['route'=>'profile'],['value'=>Auth::user()->nome])
                        &nbsp
                        @include('includes/navItem/rightSection',  ['route'=>'logout'],['value'=>'LOGOUT'])
                    @else
                        @include('includes/navItem/rightSection',  ['route'=>'login'],['value'=>'LOG IN'])
                        &nbsp;@include('includes/navItem/rightSection',  ['route'=>'signup'],['value'=>'SIGN UP'])
                    @endif
                </div>
            </nav>
        </div>

    </header>
</div>


</body>
</html>

