<!DOCTYPE html>
<html>

<head>
    @include('includes.head')
</head>

<body>

<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            @include('includes.navbar')
        </div>
    </header>
    <!-- end header section -->

    <div class="main">
        <!-- welcome section -->
        <section class="about_section layout_padding3">
            <div class="container  ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Bentornato {{Auth::user()->nome}}!
                                </h2>
                            </div>
                            @if('Locatore'==(Auth::user()->tipo))
                                <p>
                                    Inizia ora a pubblicare un annuncio!
                                </p>
                                <a href="{{route('aggAnnuncio')}}">
                                    Pubblica ora
                                </a>
                            @else
                                <p>
                                    Trova l'annuncio più adatto a te
                                </p>
                                <a href="{{ route('catalogo') }}">
                                    Sfoglia catalogo
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="img-box">
                            <img src="{{ URL('images/about-img.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->


        @include('contentSections.general.whyUs')

        @include('contentSections.general.infoSection')


        @include('includes.footer')
        @include('includes.jsScript')
    </div>

</body>
</html>
