<nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="{{ route('index') }}">
        <span>Affitta casa</span>
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
            <!-- Route About -->
            @include('includes/navItem/onlyRoute',  ['route'=>'about'], ['value'=>'About'])
            <!-- Route Why -->
            @include('includes/navItem/onlyRoute',  ['route'=>'why'], ['value'=>'Why Us'])
            <!-- Route Faq -->
            @include('includes/navItem/onlyRoute',  ['route'=>'faq'], ['value'=>'FAQ'])


            @if(isset(Auth::user()->nome))
                @if('locatario'==(Auth::user()->tipo)||'locatore'==(Auth::user()->tipo))
                    <!-- Route Chat -->
                    @include('includes/navItem/onlyRoute',  ['route'=>'chat'], ['value'=>'Chat'])
                @endif
                @if('admin'==(Auth::user()->tipo))
                <!-- Route Statistiche -->
                    @include('includes/navItem/onlyRoute',  ['route'=>'stats'], ['value'=>'Statistiche'])
                @endif
                <!-- Route Profilo -->
                @include('includes/navItem/onlyRoute',  ['route'=>'profile'], ['value'=>'Profilo'])

                @if('locatore'==(Auth::user()->tipo))
                    <!-- Route Annunci -->
                    @include('includes/navItem/onlyRoute',  ['route'=>'annunci'], ['value'=>'Annunci'])
                @endif
            @endif
        </ul>

        <!-- Login/Register Route -->
        @if(isset(Auth::user()->nome))
            @if('admin'!==(Auth::user()->tipo))
                @include('includes/navItem/rightSection',  ['route'=>'homeutente'],['value'=>Auth::user()->nome])
            @else
                @include('includes/navItem/rightSection',  ['route'=>'homeadmin'],['value'=>Auth::user()->nome])
            @endif
            &nbsp
            @include('includes/navItem/rightSection',  ['route'=>'logout'],['value'=>'LOGOUT'])
        @else
            @include('includes/navItem/rightSection',  ['route'=>'login'],['value'=>'LOG IN'])
            &nbsp;@include('includes/navItem/rightSection',  ['route'=>'signup'],['value'=>'SIGN UP'])
        @endif
    </div>
</nav>

{{--
Zona Login/Register Route
Da inserire se si vuole la visualizzazione del profilo

@include('includes/navItem/rightSection',  ['route'=>'profile'],['value'=>Auth::user()->nome])
Da inserire se si vuole andare sulla home
@if('admin'!==(Auth::user()->tipo))
    @include('includes/navItem/rightSection',  ['route'=>'homeutente'],['value'=>Auth::user()->nome])
@else
    @include('includes/navItem/rightSection',  ['route'=>'homeadmin'],['value'=>Auth::user()->nome])
@endif
--}}
