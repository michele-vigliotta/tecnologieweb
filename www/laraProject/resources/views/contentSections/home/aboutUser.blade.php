<section class="about_section layout_padding3">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    @if('admin'!=(Auth::user()->tipo))

                        <div class="heading_container">

                            <h2>
                                Bentornato {{Auth::user()->nome}}!
                            </h2>
                        </div>
                        @if('locatore'==(Auth::user()->tipo))
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
                    @elseif('admin'==(Auth::user()->tipo))
                            <div class="heading_container">
                                <h2>
                                    Bentornato Admin!
                                </h2>
                            </div>

                            <p>
                                Questa è la home admin
                            </p>
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
