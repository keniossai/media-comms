<!DOCTYPE html>
<html lang="en">


<!-- index16:47  -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon.png">
    <!-- Page Title -->
    <title> MediaComms | </title>
    <!-- Icon fonts -->
    <link href="{{ asset('website') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/flaticon.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('website') }}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Plugins for this template -->
    <link href="{{ asset('website') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/slick.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/slick-theme.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/slicknav.min.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/jquery.fancybox.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('website') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- start page-loader -->
    <div class="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- end page-loader -->
   <!-- header-area start -->
    

	
	
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100 mt-5">
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-12 col-md-9 col-lg-7 col-xl-8">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h3 class="text-uppercase text-center mb-5">Enter Payment Details</h3>
                    <form method="POST" action="{{route('pay')}}">
                        @csrf
                            <div class="form-outline mb-3">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="first_name" id="first_name" placeholder="Name" class="form-control form-control-lg" required />
                                  </div>
                            </div>
                            <div class="form-outline mb-3">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" name='email' id="email" placeholder="Email" class="form-control form-control-lg" required />
                                 </div>
                            </div>
                            {{-- <div class="form-outline mb-3">
                                <div class="form-group">
                                  <label class="form-label">Phone Number</label>
                                  <input type="number" name="number" id="number" class="form-control form-control-lg" required />
                                </div>
                            </div> --}}
                            <div class="form-outline mb-3">
                                <div class="form-group">
                                  <label class="form-label">Amount</label>
                                  <input type="text" name="amount" id="amount" class="form-control form-control-lg" required />
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-block btn-lg text-body" type="submit" value="Pay Now!" style="background-color: #C71250; color: white;">
                                    Make Donation
                                </button>
                            </div>
                    </form> 
                                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	



	<!-- Footer -->

</div>


 <!-- .footer-area end -->
    <!-- All JavaScript files
================================================== -->
<script src="{{ asset('website') }}/js/jquery.min.js"></script>
<script src="{{ asset('website') }}/js/bootstrap.min.js"></script>
<!-- Plugins for this template -->
<script src="{{ asset('website') }}/js/jquery-plugin-collection.js"></script>
<script src="{{ asset('website') }}/js/jquery.slicknav.min.js"></script>
<!-- Custom script for this template -->
<script src="{{ asset('website') }}/js/script.js"></script>



</body>
</html>