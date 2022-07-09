

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Newsoft</title>

    <!-- slider stylesheet -->
    @include('frontend.head.head')
</head>

<body>
<div class="hero_area">
    <!-- head section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{route('mainpage')}}">
            <span>
              Newsoft
            </span>
                </a>

                <div class="navbar-collapse" id="">
                    <div class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center mt-3">
                        <form class="form-inline mb-3 mb-lg-0 ">
                            <button class="btn  my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                        <ul class="navbar-nav  mr-5">
                            <li class="nav-item mr-5">
                                <a class="nav-link" href="service.html">
                                    <span>Login</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="custom_menu-btn">
                        <button onclick="openNav()">
                            <span class="s-1"> </span>
                            <span class="s-2"> </span>
                            <span class="s-3"> </span>
                        </button>
                    </div>
                    <div id="myNav" class="overlay">
                        <div class="overlay-content">
                            <a href="{{route('mainpage')}}">Home</a>
                            <a href="{{route('about')}}">About</a>
                            <a href="{{route('feature')}}">Features</a>
                            <a href="{{route('contact')}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end head section -->
</div>


<!-- who section -->
<section class="who_section layout_padding">
    <div class="container who_container">
        <div class="who_img-box">
            <img src="images/pc.jpg" alt="" />
        </div>
        <div class="who_deail-box">
            <h2>
                Who is Newsoft
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco laboris Lorem
                ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodonisi ut aliquip ex ea commodo
            </p>
            <div>
                <a href="">
                    Read More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- end who section -->

<!-- info section -->
<section class="info_section layout_padding">
    <div class="container info_content">
        <div>
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex">
                        <h5>
                            New software
                        </h5>
                    </div>
                    <div class="d-flex ">
                        <ul>
                            <li>
                                <a href="">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    About services
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    About Departments
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                        <ul class="ml-3 ml-md-5">
                            <li>
                                <a href="">
                                    Loram ipusm
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Loram ipusm
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Loram ipusm
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Loram ipusm
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Loram ipusm
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <h5>
                            The Services
                        </h5>
                    </div>
                    <div class="d-flex ">
                        <ul>
                            <li>
                                <a href="">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    About services
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    About Departments
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                        <ul class="ml-3 ml-md-5">
                            <li>
                                <a href="">
                                    Lorem ipsum dolor
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    sit amet, consectetur
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    adipiscing elit,
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    sed do eiusmod
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    tempor incididunt
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <h5>
                            Contact Us
                        </h5>
                    </div>
                    <div class="d-flex ">
                        <ul>
                            <li>
                                <a href="">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    About services
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    About Departments
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                        <ul class="ml-3 ml-md-5">
                            <li>
                                <a href="">
                                    Lorem ipsum
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    dolor sit amet,
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    consectetur
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    adipiscing
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    elit, sed do eiusmod
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
            <div class="social-box">
                <a href="">
                    <img src="images/fb.png" alt="" />
                </a>

                <a href="">
                    <img src="images/twitter.png" alt="" />
                </a>
                <a href="">
                    <img src="images/linkedin1.png" alt="" />
                </a>
                <a href="">
                    <img src="images/instagram1.png" alt="" />
                </a>
            </div>
            <div class="form_container mt-5">
                <form action="">
                    <label for="subscribeMail">
                        Newsletter
                    </label>
                    <input type="email" placeholder="Enter Your email" id="subscribeMail" />
                    <button type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- end info section -->

<!-- footer section -->
<section class="container-fluid footer_section">
    <p>
        &copy; 2019 All Rights Reserved. Design by
        <a href="https://html.design/">Free Html Templates</a>
    </p>
</section>
<!-- footer section -->


<script type="text/javascript" src="/frontend/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="/frontend/js/bootstrap.js"></script>

<script>
    function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
            .querySelector(".custom_menu-btn")
            .classList.toggle("menu_btn-style");
    }
</script>
</body>

</html>
