<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('tittle')</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" /> <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
    <link href="{{ asset('style/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('style/slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/templatemo-new-vision.css') }}" rel="stylesheet">
    
<!--

New Vision Template

https://templatemo.com/tm-542-new-vision

-->
</head>
<body>
    <!-- Page Header -->
    <div class="container-fluid">
        <div class="tm-site-header">
            <div class="row">
                <div class="col-12 tm-site-header-col">
                    <div class="tm-site-header-left">
                        <i class="far fa-2x fa-eye tm-site-icon"></i>
                        <h1 class="tm-site-name">Laravel - Afvanie</h1>
                    </div>
                    <div class="tm-site-header-right tm-menu-container-outer">
                        
                        <!--Navbar-->
                        <nav class="navbar navbar-expand-lg">
                        
                          <!-- Collapse button -->
                          <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                class="fas fa-bars fa-1x"></i></span></button>
                        
                          <!-- Collapsible content -->
                          <div class="collapse navbar-collapse tm-nav" id="navbarSupportedContent1">
                        
                            <!-- Links -->
                            @include('layouts.header')
                            <!-- Links -->
                        
                          </div>
                          <!-- Collapsible content -->
                        
                        </nav>
                        <!--/.Navbar-->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg tm-about-bg"></div>        
            </div>
        </div>
        
        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">About Our Company</h2>         
                    </div>
                </div>
                
                <div class="row tm-welcome-row">
                    <div class="tm-about">
                        <div class="col-12 tm-media tm-media-v-center">
                        <div class="container">
                            <main class="py-4">
                                @yield('content')
                            </main>
                        </div>
                    </div>                 
                    </div>    
                    </div>
                </div>
                
                <div class="row tm-welcome-row-2">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-4">Our Background and Environment</h2>        
                    </div>
                    <div class="col-md-6">
                        <div class="tm-about-1">
                            <img src="img/img-3x1-01.jpg" alt="Image" class="img-fluid mb-5">
                            <p class="tm-article-text">Phasellus blandit tortor vel odio hendrerit, eleifend ultricies odio temport. Etiam euismod, lectus convallis efficitur convallis, risus orci auctor orci.</p>
                            <p>Cras imperdiet in ligula sit amet fringilla. Morbi posuere mattis ornare. Nunc iaculis porta ipsum. Aliquam vehicula egestas diam auctor ornare.</p>
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="tm-about-1">
                            <img src="img/img-3x1-02.jpg" alt="Image" class="img-fluid mb-5">
                            <p class="tm-article-text">Quisque sed tortor sed metus vehicula pulvinar vel dictum tortor. Nivamus eu posuere arcu. Vivamus vel urna id mi congue convallis at sed augue.</p>
                            <p>Praesent venenatis risus aliquet semper porta. Maecenas mollis nisi non hendrerit finibus. Ut eu convallis massa. Sed imperdiet arcu non egestas elementum.</p>
                        </div>    
                    </div>
                </div>
            </section>
            
            <!-- Featured -->
            <section class="tm-featured">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-3">Our Team Members</h2>        
                    </div>
                </div>
                
                <!-- Carousel -->
                <div class="grid tm-carousel">
                    <figure class="effect-zoe">
                        <img src="img/team-img-01.jpg" alt="Featured Item">
                        <figcaption>
                            <h2>John Stone</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="img/team-img-02.jpg" alt="Featured Item">
                        <figcaption>
                            <h2>Jane Meldrum</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="img/team-img-03.jpg" alt="Featured Item">
                        <figcaption>
                            <h2>Trevor Virtue</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="img/team-img-04.jpg" alt="Featured Item">
                        <figcaption>
                            <h2>Emily Moore</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="img/team-img-05.jpg" alt="Featured Item">
                        <figcaption>
                            <h2>Claire Li</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="img/team-img-06.jpg" alt="Featured Item">
                        <figcaption>
                            <h2>Elisabeth Shu</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="img/team-img-07.jpg" alt="Featured Item">
                        <figcaption>
                            <h2>Dania Liu</h2>
                            <p class="icon-links">
								<a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                    <figure class="effect-zoe">
                        <img src="img/team-img-08.jpg" alt="Featured Item">
                        <figcaption>
                            <h2>Miracle Yang</h2>
                            <p class="icon-links">
								<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
							</p>
                        </figcaption>
                    </figure>
                </div>
            </section>
            
            <footer>
                Copyright &copy; 2020 New Vision 
                
                - Design: <a href="https://templatemo.com" rel="sponsored" target="_parent" title="css templates">TemplateMo</a>
            </footer>
            
        </main>
    </div>
    <script src="{{ asset('style/js/jquery-3.4.1.min.js') }}" defer></script>
    <script src="{{ asset('style/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('style/slick/slick.min.js') }}" defer></script>
    <script src="{{ asset('style/js/templatemo-script.js') }}" defer></script>

</body>
</html>