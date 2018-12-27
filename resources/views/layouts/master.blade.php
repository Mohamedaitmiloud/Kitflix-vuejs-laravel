<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webflix</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/img/favicon.ico" type="/img/x-icon">
    <link rel="apple-touch-icon-precomposed" href="/img/apple-touch-icon.png">

    <!--     Include UIKit CSS   -->
    <link rel="stylesheet" href="{{asset('/css/all.css')}}">

</head>

<body>

    <!--     start Header Section   -->
    <div id="app">

        <nav id="tm-topbar" class=" uk-navbar uk-contrast ">
            <div class="uk-container uk-container-center ">
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li>
                        <a href="#"><i class="uk-icon-facebook-square uk-icon-small"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uk-icon-twitter-square uk-icon-small"></i></a>
                    </li>

                    <li>
                        <a href="#"><i class="uk-icon-instagram uk-icon-small"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uk-icon-pinterest uk-icon-small"></i></a>
                    </li>

                </ul>
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>

                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <nav id="tm-header" class="uk-navbar ">
            <div class="uk-container uk-container-center ">
                <a class="uk-navbar-brand uk-hidden-small" href="index.html"><i class="uk-icon-small uk-text-primary uk-margin-small-right uk-icon-play-circle"></i>
                    WEBFLIX</a>


                <div class="uk-navbar-flip uk-hidden-small">
                    <div class="uk-button-group">
                        <router-link class="uk-button uk-button-link uk-button-large" to="/signup">Sign up</router-link>
                        <router-link class="uk-button uk-button-success uk-button-large uk-margin-left" to="/login"><i
                                class="uk-icon-lock uk-margin-small-right"></i> Log in</router-link>

                    </div>
                </div>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small uk-icon-medium" data-uk-offcanvas></a>
                <div class="uk-navbar-flip uk-visible-small">
                    <a href="#offcanvas" class="uk-navbar-toggle uk-navbar-toggle-alt uk-icon-medium" data-uk-offcanvas></a>
                </div>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><i class="uk-icon-small uk-text-primary uk-margin-small-right uk-icon-play-circle"></i>
                    Webflix</div>
            </div>
        </nav>
        <nav class="uk-navbar uk-navbar-secondary  uk-hidden-small">
            <div class="uk-container-center uk-container">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="">Featured</a></li>
                    <li><a href="">Movies</a></li>
                    <li><a href="">TV Shows</a></li>
                    <li><a href="">Music</a></li>
                    <li class="uk-parent" data-uk-dropdown>
                        <a href="">Genre <i class="uk-icon-angle-down uk-margin-small-left"></i></a>
                        <div class="uk-dropdown uk-dropdown-navbar">
                            <ul class="uk-nav uk-nav-navbar">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Animation</a> </li>
                                <li><a href="#">Anime</a> </li>
                                <li><a href="#">Adventure</a> </li>
                                <li><a href="#">Biography</a> </li>
                                <li><a href="#">Comedy</a> </li>
                                <li><a href="#">Crime</a> </li>
                                <li><a href="#">Romance</a> </li>
                                <li><a href="#">Documentary</a> </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="uk-navbar-flip">
                    <form class="uk-search uk-margin-small-top uk-margin-left uk-hidden-small">
                        <input class="uk-search-field" type="search" placeholder="Search..." autocomplete="off">
                        <div class="uk-dropdown uk-dropdown-flip uk-dropdown-search" aria-expanded="false"></div>
                    </form>
                </div>
            </div>
        </nav>

        <!--     ./ Header Section   -->


        <!--     start Main Content Section   -->

        <div>
            <router-view></router-view>
        </div>

        <!--     ./ Main Content Section   -->

        <!--     start Footer Section   -->

        <footer id="tm-footer" class="uk-block uk-block-secondary uk-block-small">
            <div class="uk-container-center uk-container">
                <div class="uk-grid">
                    <div class="uk-width-medium-3-10">
                        <div class="copyright-text">&copy; 2016 <span class="uk-text-bold">Webflix</span> - Streaming
                            Media Theme</div>
                    </div>
                    <div class="uk-width-medium-5-10">
                        <ul class="uk-subnav ">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-medium-2-10">
                        <div class=" uk-float-right">
                            <ul class="uk-subnav">
                                <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-facebook-square"></a></li>
                                <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-twitter"></a></li>
                                <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-instagram"></a></li>
                                <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-pinterest"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!--     ./ Footer Section   -->

    <!--   Include JS   -->
    <script src="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('/js/all.js')}}"></script>
</body>

</html>
