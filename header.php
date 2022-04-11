<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KK Tourist Home</title>
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <!-- <link rel="stylesheet" href="assets/css/linea-arrows.css"> -->
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/date.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<script>
    var arrivingvalue = "";
    var leavingvalue = "";
    function checkin(){
        var arrivingvalue = document.form5.arriving.value;
        document.form1.checkin.value = arrivingvalue;
    }
    function checkout(){
        var leavingvalue = document.form5.leaving.value;
        document.form1.checkout.value = leavingvalue;
    }
</script>

      <div class="main">
            <!-- ***** Header Start ***** -->
           <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
                <div class="container position-relative">
                    <a class="navbar-brand" href="index">
                        <img class="navbar-brand-regular" src="assets/img/logo/logo.png" class="img-fluid" alt="brand-logo">
                        <img class="navbar-brand-sticky" src="assets/img/logo/logo.png" class="img-fluid" alt="sticky brand-logo">
                    </a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="navbar-inner">
                        <!--  Mobile Menu Toggler -->
                       <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <nav>
                            <ul class="navbar-nav" id="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index">Home</a>
                                </li> 
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown">
                                        About Us
                                    </a>
                                    <div class="dropdown-menu mega-menu blog-menu px-3 py-md-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="single-menu">
                                                    <li><a class="dropdown-item" href="about-us">KK Tourist-home</a></li>
                                                    <li><a class="dropdown-item" href="our-hotels">Our Hotels</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="destinations">Destinations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="facilities">Facilities</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="reservation">Reservation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="rooms">Rooms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-link-btn" data-toggle="modal" data-target="#exampleModal0">Book Now</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </header>  
