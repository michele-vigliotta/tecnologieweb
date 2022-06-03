<!DOCTYPE html>
<html>

<head>
    @include('includes.head')
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
          @include('includes/navbar')
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- sale section -->

  <section class="sale_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          House For Sale
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the
        </p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/s1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Apartments house
              </h6>
              <p>
                There are many variations of passages of Lorem Ipsum available, but
              </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/s2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Apartments house
              </h6>
              <p>
                There are many variations of passages of Lorem Ipsum available, but
              </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/s3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Apartments house
              </h6>
              <p>
                There are many variations of passages of Lorem Ipsum available, but
              </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/s4.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Apartments house
              </h6>
              <p>
                There are many variations of passages of Lorem Ipsum available, but
              </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>

        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/s5.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Apartments house
              </h6>
              <p>
                There are many variations of passages of Lorem Ipsum available, but
              </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/s6.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Apartments house
              </h6>
              <p>
                There are many variations of passages of Lorem Ipsum available, but
              </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Find More
        </a>
      </div>
    </div>
  </section>

  <!-- end sale section -->

  @include('contentSections/general/infoSection')


  <!-- footer section -->
  <footer class="footer_section">
      @include('includes/footer')
  </footer>
  <!-- footer section -->

  @include('includes.jsScript')


</body>

</html>
