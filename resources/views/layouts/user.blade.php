<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bangladesh Crystallographic Association</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- All Stylesheet -->
    <link rel="stylesheet" href="/css/user/element.css">
    <link rel="stylesheet" href="/css/user/style.css">
    <link rel="stylesheet" href="/css/user/responsive.css">
    <!-- modernizr js -->
    <script src="/js/user/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<div class="preloader">
    <div class="preloader-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
        <!-- start header top area -->
    </div>
</div>
<!-- End Preloader -->
<!-- start main wrapper area -->
<div class="main-wrapper">
    <!-- Start Header Style Section -->
    <header>
        <div class="header-area">
            <!-- End header top area -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="logo">
                            <a href="/"><img style="height: 76px; margin-top: 10px;" src="/img/logo.PNG"></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 hidden-xs hidden-sm mainmenu-main-wrapper">
                        <div class="menu-area add-search">
                            <nav>
                                <ul class="main-menu hover-style-one clearfix ">
                                    <li><a href="{{Route('user.index')}}">Home</a></li>
                                    <li><a href="javascript:void(0);">About Us <span><i class="fa fa-sort-desc" aria-hidden="true"></i></span></a>
                                        <ul class="dropdown">
                                            <li><a href="{{Route('user.history')}}"><i class="fa fa-caret-right"></i>History</a></li>
                                            <li><a href="{{Route('user.sponsorship')}}"><i class="fa fa-caret-right"></i>Sponsorship</a></li>
                                            <li><a href="{{Route('user.travel_support')}}"><i class="fa fa-caret-right"></i>Travel Support</a></li>
                                            <li><a href="{{Route('user.visa_application')}}"><i class="fa fa-caret-right"></i>Visa Application</a></li>
                                            <li><a href="{{Route('user.travel_info')}}"><i class="fa fa-caret-right"></i>Travel Info</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">Committee <span><i class="fa fa-sort-desc" aria-hidden="true"></i></span></a>
                                        <ul class="dropdown">
                                            <li><a href="/committee/organizing"><i class="fa fa-caret-right"></i>Organizing Committee</a></li>
                                            <li><a href="/committee/executive"><i class="fa fa-caret-right"></i>Executive Committee</a></li>
                                            <li><a href="/committee/advisory"><i class="fa fa-caret-right"></i>Advisory Committee</a></li>
                                            <li><a href="/committee/sub"><i class="fa fa-caret-right"></i>Sub-Committees</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{Route('user.program')}}">Program</a></li>
                                    <li><a href="{{Route('user.notice')}}">Announcement</a></li>
                                    <li><a href="{{Route('user.news')}}">News</a></li>
                                    <li><a href="{{Route('user.contact')}}">Contact</a></li>
                                    <li><a href="{{Route('login')}}">Login</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="mobile-menu-area">
                        <div class="mobile-menu-custom">
                            <ul>
                                <li><a href="{{Route('user.index')}}">Home</a></li>
                                <li><a href="javascript:void(0);">About Us <span><i class="fa fa-sort-desc" aria-hidden="true"></i></span></a>
                                    <ul class="dropdown">
                                        <li><a href="{{Route('user.history')}}"><i class="fa fa-caret-right"></i>History</a></li>
                                        <li><a href="{{Route('user.sponsorship')}}"><i class="fa fa-caret-right"></i>Sponsorship</a></li>
                                        <li><a href="{{Route('user.travel_support')}}"><i class="fa fa-caret-right"></i>Travel Support</a></li>
                                        <li><a href="{{Route('user.visa_application')}}"><i class="fa fa-caret-right"></i>Visa Application</a></li>
                                        <li><a href="{{Route('user.travel_info')}}"><i class="fa fa-caret-right"></i>Travel Info</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);">Committee <span><i class="fa fa-sort-desc" aria-hidden="true"></i></span></a>
                                    <ul class="dropdown">
                                        <li><a href="/committee/organizing"><i class="fa fa-caret-right"></i>Organizing Committee</a></li>
                                        <li><a href="/committee/executive"><i class="fa fa-caret-right"></i>Executive Committee</a></li>
                                        <li><a href="/committee/advisory"><i class="fa fa-caret-right"></i>Advisory Committee</a></li>
                                        <li><a href="/committee/sub"><i class="fa fa-caret-right"></i>Sub-Committees</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{Route('user.program')}}">Program</a></li>
                                <li><a href="{{Route('user.notice')}}">Announcement</a></li>
                                <li><a href="{{Route('user.news')}}">News</a></li>
                                <li><a href="{{Route('user.contact')}}">Contact</a></li>
                                <li><a href="{{Route('login')}}">Login</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Style Section -->

    @yield('body')
    @include('partials._masseges')

    <!-- Start footer Section -->
    <footer class="footer-area ">
        <div class="footer-top-section ptb-100 black-bg">
            <div class="container">
                <div class="row">
                    <div class="widget-wrapper">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget-item">
                                <h2>Follow Us</h2>
                                <ul class="social-bookmarks footer-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget-item">
                                <h2>Menu</h2>
                                <ul class="widget-link">
                                    <li><a href="{{Route('user.history')}}"> <i aria-hidden="true" class="fa fa-long-arrow-right"></i>About Us</a></li>
                                    <li><a href="{{Route('user.contact')}}"><i aria-hidden="true" class="fa fa-long-arrow-right"></i>Contact Us</a></li>
                                    <li><a href="{{Route('user.program')}}"><i aria-hidden="true" class="fa fa-long-arrow-right"></i>Program</a></li>
                                    <li><a href="{{Route('user.notice')}}"><i aria-hidden="true" class="fa fa-long-arrow-right"></i>Announcement</a></li>
                                    <li><a href="{{Route('user.news')}}"><i aria-hidden="true" class="fa fa-long-arrow-right"></i>News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget-item">
                                <h2>Uesful Links</h2>
                                <ul class="widget-link">
                                    <li><a href="http://du.ac.bd/"> <i aria-hidden="true" class="fa fa-long-arrow-right"></i>University of Dhaka</a></li>
                                    <li><a href="http://www.discoverybangladesh.com/"> <i aria-hidden="true" class="fa fa-long-arrow-right"></i>Discover Bangladesh</a></li>
                                    <li><a href="http://www.parjatan.gov.bd/"><i aria-hidden="true" class="fa fa-long-arrow-right"></i>Bangladesh Parjatan Corporation</a></li>
                                    <li><a href="https://bangladesh.gov.bd/index.php"><i aria-hidden="true" class="fa fa-long-arrow-right"></i>Goverment of Bangladesh</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget-item">
                                <h2>Get In Tuch</h2>
                                <ul class="widget-address">
                                    <li><a href="#"><i class="fa fa-phone m-5"></i> +6681 631 237 884</a></li>
                                    <li><a href="#"><i class="fa fa-envelope m-5"></i>altaf@du.ac.bd</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>Copyright 2017 &copy; BCA. All Rights Reserved. </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright">
                            <span style="color: white; font-style: italic;">Developed By: </span> <a href="http://soft360d.com/">360 Degree Software</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Section -->
</div>
<!-- start main wrapper area -->
<!-- All jQuery -->
<script src="/js/user/vendor/jquery-1.12.0.min.js"></script>
<script src="/js/user/plugins.js"></script>
<script src="/js/user/main.js"></script>
<script>
    $(document).ready(function () {
        @if(Session::has('success_post'))
            $('#success_post').modal('show');
        @elseif(Session::has('registration_confirmation'))
            $('#registration_confirmation').modal('show');
        @endif
    });
</script>

@yield('script')
</body>

</html>