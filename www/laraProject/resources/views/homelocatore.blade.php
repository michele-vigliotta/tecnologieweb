<!DOCTYPE html>
<html>

<head>
    @include('includes/head')
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
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
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('catalogo') }}">Catalogo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('why') }}">Faq</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('testimonial') }}">Chat</a>
              </li>
              <li class="nav-item">
                  <a class="nav-item" href="{{ route('catlogo') }}">Profilo</a>
              </li>
              <li class="nav-item">
                  <a class="nav-item" href="{{ route('catlogo') }}">Annunci</a>
              </li>
            </ul>
            @if(isset(Auth::user()->nome))
              <div class="quote_btn-container">
                <a href="{{ route('profile') }}" class="quote_btn">
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
                Bentornato Auth::user()->name!
              </h2>
            </div>
            <p>
              Inizia ora a pubblicare un annuncio andando nella sezione annunci
            </p>
            <a href="./about.html">
              Pubblica ora
            </a>
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



  <!-- why us section -->
  <section class="why_us_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose Us?
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ URL('images/w1.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Satisfied customers
              </h5>
              <p>
                Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                Virginia.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ URL('images/w2.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                24/7 Support
              </h5>
              <p>
                Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                Virginia.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ URL('images/w3.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Affordable price
              </h5>
              <p>
                Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                Virginia.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>
  <!-- end why us section -->

  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>

        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ URL('images/client1.jpg') }}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ URL('images/client2.jpg') }}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ URL('images/client1.jpg') }}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ URL('images/client2.jpg') }}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- info section -->
  <section class="info_section ">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +01 123455678990
          </span>
        </a>
        <a href="mailto:demo@gmail.com">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : demo@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row info_main_row">
          <div class=" col-md-4 col-lg-4 ">
            <div class="info_about">
              <h4>
                About Us
              </h4>
              <p>
                Siamo una società che nasce con l'intento con l'intento di facilitare gli studenti nella ricerca di un alloggio,
                facilitando lo scambio di informazioni con il locatore nel modo più facile e chiaro possibile.
              </p>
            </div>
          </div>
          <div class=" col-md-4 col-lg-3 mx-auto">
            <div class="info_links">
              <h4>
                QUICK LINKS
              </h4>
              <div class="info_links_menu">
                  <a href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                  <a href="{{ route('about') }}"> About</a>
                  <a href="{{ route('why') }}">Why Us</a>
                  <a href="{{ route('faq') }}">FAQ</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        Gruppo 19 - Marco Pasquale Martino, Filippo Montagnoli,
        Michele Vigliotta, Diego Vaccarini
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{ URL('js/jquery-3.4.1.min.js') }}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- nice select -->
  <script src="{{ URL('js/jquery.nice-select.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{ URL('js/bootstrap.js') }}"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="{{ URL('js/custom.js') }}"></script>
</div>
  </div>
</body>
</html>
