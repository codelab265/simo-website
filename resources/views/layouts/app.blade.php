<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        {{ $title ?? 'Page Title' }} - SIMO
    </title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @vite(['resources/js/app.js'])
</head>

<body>

    <section id="top">
        <div class="container">
            <div class="row top1">
                <div class="col-md-9">
                    <div class="top1l">
                        <ul class="mb-0">
                            <li class="d-inline-block">
                                <a href="#">
                                    <i style="margin-right:5px;" class="fa fa-envelope"></i>
                                    info@simoentertainment.com
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="#">
                                    <i style="margin-right:5px;" class="fa fa-map-marker"></i>
                                    X Sacraine House, Area 4.
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="#">
                                    <i style="margin-right:5px;" class="fa fa-phone"></i>
                                    +265 (0) 1 759 290
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="top1r float-end">
                        <ul class="mb-0">
                            <li class="d-inline-block"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="d-inline-block"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="d-inline-block"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="d-inline-block"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="navbar_sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header_resp"
                        style="display: flex; flex-direction:row; align-items: center; justify-content:space-between">
                        <a href="/" class="logo" wire:navigate>
                            <img src={{ asset('img/logo.png') }} width="250px" />
                        </a>
                        <div class="header_resp-right float-end">
                            <a class={{ request()->routeIs('home') ? 'active_tab' : 's' }} href="{{ route('home') }}"
                                wire:navigate>
                                Home
                            </a>
                            <a class={{ request()->routeIs('about') ? 'active_tab' : 's' }}
                                href="{{ route('about') }}" wire:navigate>
                                About
                            </a>

                            <a class={{ request()->routeIs('service') ? 'active_tab' : 's' }}
                                href="{{ route('service') }}" wire:navigate>
                                Services
                            </a>


                            <a class={{ request()->routeIs('portfolio') ? 'active_tab' : 's' }}
                                href={{ route('portfolio') }} wire:navigate>Portfolio</a>

                            <a class={{ request()->routeIs('contact') ? 'active_tab' : 's' }}
                                href={{ route('contact') }} wire:navigate>Contact</a>

                            <a class="quote" href={{ route('contact') }} wire:navigate>
                                Book now
                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="mynav" id="mynav">
        <a href="index.html" class="brand"><i style="margin-right:5px;" class="fa fa-building-o col_1"></i> Tech IT</a>
        <a class="active m_tag" href="index.html">Home</a>
        <a class="m_tag" href="about.html">About</a>
        <div class="dropdown">
            <button class="dropbtn m_tag">Blog
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="drop-content">
                <a href="blog.html">Blog</a>
                <a href="blog_detail.html">Blog Detail</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn m_tag">Services
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="drop-content">
                <a href="services.html">Services</a>
                <a href="service_detail.html">Service Detail</a>
            </div>
        </div>
        <a class="m_tag" href="portfolio.html">Portfolio</a>
        <a class="m_tag" href="contact.html">Contact</a>

        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onClick="myFunction()"><i
                class="fa fa-bars"></i></a>
    </div>

    {{ $slot }}

    <section id="footer">
        <div class="container">
            <div class="row footer_1">
                <div class="col-md-4">
                    <div class="footer_1i">
                        <img src="{{ asset('img/logo-white.png') }}" width="250" alt="" srcset="">
                        <p class="mt-3 text-light">
                            SIMO Entertainment and Promotion, founded in 2013 by Maurince and Sintha Chinthiti in
                            Malawi, excels in innovative client and event promotion while prioritizing community support
                            through ongoing charitable contributions, aiming to leave a lasting impact on the
                            entertainment industry with each project's success.
                        </p>
                        <ul class="mb-0">
                            <li class="d-inline-block"><a href="#">Follow Us</a></li>
                            <li class="d-inline-block"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="d-inline-block"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="d-inline-block"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="d-inline-block"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_1i1">
                        <h4 class="text-white mb-4">Our Services</h4>
                        <h6 class="text-light normal"><i style="font-size:10px; margin-right:5px;"
                                class="fa fa-circle-o"></i> <a href="#">Events Management</a></h6>
                        <h6 class="text-light normal"><i style="font-size:10px; margin-right:5px;"
                                class="fa fa-circle-o"></i> <a href="#">Corporate Entertainment</a></h6>
                        <h6 class="text-light normal"><i style="font-size:10px; margin-right:5px;"
                                class="fa fa-circle-o"></i> <a href="#">Conferences Audio & Visual Services</a>
                        </h6>
                        <h6 class="text-light normal"><i style="font-size:10px; margin-right:5px;"
                                class="fa fa-circle-o"></i> <a href="#">Product/Service Promotions</a></h6>
                        <h6 class="text-light normal"><i style="font-size:10px; margin-right:5px;"
                                class="fa fa-circle-o"></i> <a href="#">Brand Activation</a></h6>
                        <h6 class="text-light normal"><i style="font-size:10px; margin-right:5px;"
                                class="fa fa-circle-o"></i> <a href="#">Outdoor/Indoor Public Address
                                Equipment</a></h6>
                        <h6 class="text-light normal"><i style="font-size:10px; margin-right:5px;"
                                class="fa fa-circle-o"></i> <a href="#">Audio Visual Equipment</a></h6>
                        <h6 class="text-light normal mb-0"><i style="font-size:10px; margin-right:5px;"
                                class="fa fa-circle-o"></i> <a href="#">Band PA System</a></h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_1i1">
                        <h4 class="text-white mb-3">Company Address</h4>

                        <p class="text-light mb-1"><span>Address :</span> X Sacraine House, Area 4.
                            Opp. Farming Engineering Services(FES)
                            </br>
                            P O Box 1845,
                            Lilongwe, Malawi
                        </p>
                        <p class="text-light mb-1"><span>Phone :</span> +265 (0) 1 759 290</p>
                        <p class="text-light mb-0"><span>Email :</span> info@simoentertainment.com</p>
                    </div>
                </div>

            </div>
            <div class="row footer_2">
                <div class="col-md-12">
                    <div class="footer_2l">
                        <p class="mb-0 col_2">© {{ date('Y') }} SIMO Entertainment. All Rights Reserved
                            {{-- | Design
                            by <a class="col_2" href="https://mphatso.codelab265.com">Codelab265</a> --}}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        function myFunction() {
            var x = document.getElementById("mynav");
            if (x.className === "mynav") {
                x.className += " responsive";
            } else {
                x.className = "mynav";
            }
        }
    </script>
</body>

</html>
