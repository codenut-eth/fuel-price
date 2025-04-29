<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', 'Fuel Prices')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/aos/aos.css') }}" rel="stylesheet">
	
    <link href="{{ asset('/assets/vendor/select2-4.0.13/dist/css/select2.min.css') }}" rel="stylesheet">
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Template Main CSS File -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex rem">
            <div class="logo mr-auto">
                <h1 class=""><a href="{{ url('/') }}">Fuel Prices</a></h1>
            </div>

			  		<div class="col-lg-3 mb-3 mb-lg-0">
              
					<!-- <input type="text" class="form-control" id="searchadd" placeholder="Search By Address"> -->
          <input type="text" class="form-control" id="searchadd" placeholder="Search By Address">
          <div id="suggestions-box" style="position:absolute; background:#007bff; z-index:1000;"></div>
          <ul id="search-results" class="list-group" style="position: absolute; z-index: 1000;"></ul>
					</div>
					<div class="col-lg-3 mb-3 mb-lg-0">
					<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#fuelPriceModal">Add Fuel Price</button>
					</div>
			
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about-us')}}">About Us</a></li>
                    <!--<li><a href="#contact">Contact Us</a></li>-->
                    @auth
                        <!-- Links for authenticated users -->
                        <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li>
                            <a href="#" class="logout">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else
                        <!-- Links for guests -->
                        <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
                        <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                    <!-- Other links -->
                </ul>
            </nav>


        </div>
    </header><!-- End Header -->

    <div class="main-container" style="">
        @yield('content')
    </div>

    <!-- ======= Footer ======= -->
    <!--<footer id="footer" class="d-sm-block d-none">-->
        <!-- <div class="footer-top">
          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                  <h3>Maxim</h3>
                  <p>
                    A108 Adam Street <br>
                    NY 535022, USA<br><br>
                    <strong>Phone:</strong> +1 5589 55488 55<br>
                    <strong>Email:</strong> info@example.com<br>
                  </p>
                  <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
              </div>

              <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>

              </div>

            </div>
          </div>
        </div> -->

        <!--<div class="container" >-->
        <!--    <div class="copyright">-->
        <!--        &copy; Copyright <strong><span>Fuel Prices</span></strong>. All Rights Reserved-->
                <!-- THE LICENCE FOR THIS TEMPLATE IS PURCASED BY MY DEVELOPER, EMAIL - saurabhmanna2010@gmail.com -->

    <!--        </div>-->

    <!--    </div>-->
    <!--</footer>-->
    
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</div>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.inputmask.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/select2-4.0.13/dist/js/select2.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




@stack('scripts')

<script>
    $(document).ready(function () {
        $(".logout").click(function () {
            $.ajax({
                url: '{{ url('logout') }}',
                type: 'POST',
                data: { "form_type": "logout", _token: '{{ csrf_token() }}' },
                success: function (response) {
                    window.location.href = '{{ url('/') }}';
                }
            });
        });

        $('#searchadd').on('keyup', function () {
        let query = $(this).val();
        if (query.length < 2) {
            $('#suggestions-box').hide();
            return;
        }

        $.get('/address-suggestions', { term: query }, function (data) {
            let html = '';
            data.forEach(function (address) {
                html += '<div class="suggest-item" style="padding: 5px; cursor:pointer;">' + address + '</div>';
            });
            $('#suggestions-box').html(html).show();
        });
      });
      $(document).on('click', '.suggest-item', function () {
        let selectedAddress = $(this).text();
        $('#searchadd').val(selectedAddress);
        $('#suggestions-box').hide();

        // Now fetch stations
        $.get('/get-stations', { searchadd: selectedAddress }, function (stations) {
            console.log(stations); // Replace this with code to render stations in your page
        });
      });
    });


</script>
</body>

</html>
