
@if( Request::is($route))
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{ route($route) }}"> {{$value}} </a>
    </li>
