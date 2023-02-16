<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Parkplanet</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Nodig voor navbar -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- welcome page template -->
        <link rel="stylesheet" href="{{ asset('css/') }}/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/b3c2d71893.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body>

    <!-- Navbar -->
    <div class="wrap">
        <header id="header">
            <div class="container-fluid">
                <div class="row">
                    <!--<div class="col-md-2">
                            <img src="img\parkplanet.ico" height="80"  >
                                                </div> -->
                    <div class="col-md-12">

                    <nav class="navbar navbar-expand-md bg-light navbar-light">
                    <!-- Brand -->
                    <a class="navbar-brand" href="/">Parkplanet</a>
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar links -->
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register">Register</a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                        <a class="nav-link" href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}</a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <section class="banner" id="top" style="background-image: url(img/welcome.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Vindt u geen parking? Dan bent u op de juiste plaats!</h2>
                        <div class="blue-button">
                        <!-- Nog geen route gemaakt, moet de button naar de map leiden? -->
                            <a href="/mappage">Zoek op de kaart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Wat wilt u doen?</h2>
                        </div>
                    </div> 
                </div> 
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{URL::asset('/img/verhuurder.png')}}">
                                </div>

                              
                            </div>

                            <div class="down-content">
                                <h4>Verhuur uw parkeerplaats</h4>

                                <p>Log in als verhuurder en maak een zoekertje zodat andere mensen uw parkeerplaats kunnen huren.</p>

                                <div class="text-button">
                                    <a href="/owners">Login als verhuurder</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{URL::asset('/img/huurder.jpg')}}">
                                </div>

                                <!-- <div class="overlay-content">
                                 <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                </div> -->
                            </div>

                            <div class="down-content">
                                <h4>Zoek een parkeerplaats</h4>

                                <p>Zoekt u een parkeerplaats in de buurt? Zoek op de kaart en log in om een parkeerplaats te huren.</p>

                                <div class="text-button">
                                    <a href="/mappage">Ga naar de kaart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            

                            
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div>
    
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            
                        </div>
                        
                        <ul class="social-icons">
                            <li>
                                <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
                                <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
                                <a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="/"><i class="fa fa-stop"></i>Home</a></li>
                                    <li><a href="/"><i class="fa fa-stop"></i>About</a></li>
                                    <li><a href="/"><i class="fa fa-stop"></i>Team</a></li>
                                    <li><a href="/"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i> Genk T2 campus</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

    

    </body>
