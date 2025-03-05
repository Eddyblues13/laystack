<!DOCTYPE html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> laystacktb.com </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500&amp;display=swap"
        rel="stylesheet">


    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/LineIcons.2.0.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('fonts/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/typography.css')}}" />
    <link rel="stylesheet" href="{{asset('style.css')}}" />



</head>


<body>

    <!-- Preloader Start-->
    <div id="preloader">
        <div class="iddrak-load"></div>
    </div>
    <!-- Preloader End-->

    <!-- Header Start -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand style3" href="{{url('/')}}">
                                <img src="{{asset('uploads/logo.png')}}" alt="Logo">
                            </a>

                            <div id="google_translate_element"></div>

                            <script type="text/javascript">
                                function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
                            </script>

                            <script type="text/javascript"
                                src="../translate.google.com/translate_a/elementa0d8a0d8.html?cb=googleTranslateElementInit">
                            </script>



                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="{{url('/')}}" class="active" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/projects')}}" aria-label="Toggle navigation">Projects</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/services')}}" aria-label="Toggle navigation">Services</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <!--<a href="blog.php" aria-label="Toggle navigation">Blog</a>-->
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/about')}}" aria-label="Toggle navigation">About Us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{url('/contact')}}" aria-label="Toggle navigation">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button add-list-button">
                                <a href="{{route('verify')}}" class="btn">Signup </a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- Header End -->