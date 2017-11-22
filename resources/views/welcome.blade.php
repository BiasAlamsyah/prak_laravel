<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fame - One Page Multipurpose Bootstrap Theme</title>
	<!-- custom style-->
   	<link href="{{ URL::asset('css/style1.css')}}" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
    
    <!-- Font Awesome CSS -->
    <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    
    
    <!-- Animate CSS -->
    <link href="{{ URL::asset('css/animate.css')}}" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css')}}" >
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css')}}" >
    <link rel="stylesheet" href="{{ URL::asset('css/owl.transitions.css')}}" >

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/responsive.css')}}" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/color/green.css')}}">
    
    
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/color/green.css')}}" title="green">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/color/light-red.css')}}" title="light-red">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/color/blue.css')}}" title="blue">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/color/light-blue.css')}}" title="light-blue">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/color/yellow.css')}}" title="yellow">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/color/light-green.css')}}" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="{{ URL::asset('js/modernizr.custom.js')}}"></script>

    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body class="index">
    
    
    <!-- Styleswitcher
================================================== -->
        <div class="colors-switcher">
            <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>        
                <ul class="colors-list">
                    <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
                    <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
                    <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
                    <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>
                    
                    <li class="no-margin"><a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a></li>
                    <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>
                    
                </ul>

        </div>  
<!-- Styleswitcher End
================================================== -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Gandool 21</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="list">List</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="forum">Forum</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about">About</a>
                    </li>
                    
                </ul>
                @if (Route::has('login'))
                    @if (Auth::check())
                    	<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('user.logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
    Logout
</a>

<form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
                                    </li>
                                </ul>
                            </li>
					</ul>
                    @else
                    <ul class="nav navbar-nav navbar-right">
						<li class="navbar-right col-lg-pull-2"><a href="{{ url('/register') }}">Register</a></li>
						<li class="navbar-right col-lg-pull-2"><a href="{{ url('/login') }}">Login</a></li>
					</ul>
                    @endif
                
						@endif


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    
    
    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
               
                <div class="item active">
                    <img class="img-responsive" src="images/Jumanji-Welcome-to-the-Jungle.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                           <div data-type="countdown" data-id="375122" class="tickcounter" style="width: 100%; position: relative; padding-bottom: 25%"><a href="//www.tickcounter.com/countdown/375122/jumanji-welcome-to-the-jungle" title="Jumanji Welcome to the Jungle">Jumanji Welcome to the Jungle</a><a href="//www.tickcounter.com/" title="Countdown">Countdown</a></div><script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="{{ URL::to('/images/kylo-ren-lightsaber-star-wars-the-last-jedi-1421.jpg')}}" alt="slider">
                    
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <div data-type="countdown" data-id="375125" class="tickcounter" style="width: 100%; position: relative; padding-bottom: 25%"><a href="//www.tickcounter.com/countdown/375125/star-wars-the-last-jedi" title="Star Wars: The Last Jedi">Star Wars: The Last Jedi</a><a href="//www.tickcounter.com/" title="Countdown">Countdown</a></div><script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="images//UcIFZ9xr.png" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <div data-type="countdown" data-id="375127" class="tickcounter" style="width: 100%; position: relative; padding-bottom: 25%"><a href="//www.tickcounter.com/countdown/375127/avengers-infinity-war" title="Avengers: Infinity War">Avengers: Infinity War</a><a href="//www.tickcounter.com/" title="Countdown">Countdown</a></div><script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->
			
            <!-- Controls -->
            
            
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    
    
    
    <!-- Clients Aside -->
       <div class="kbox">
         <div class="isi"><div class="jdlpost">
			<h3>New Releases</h3>
			</div>
            <div class="post">
				<ul class="content">
					@foreach($uploads as $key => $upload)
					<li>
					
					
						<div class="tumbn col-lg-6"><img src="{{ URL::to('/uploads/' . $upload->image) }}" alt="{{ $upload->name }}"></div>
						<div class="detail">
							<h2>{{ $upload->name }}</h2>
							<p>{{$upload->date}}</p>
							<div class="desc">
								{{$upload->sinopsis}}
							</div>
						</div>
					</li>
					@endforeach
					
				</ul>
			</div>
		  </div>
       </div>
    
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; <a href="http://guardiantheme.com">GuardinTheme</a> 2015</span>
                    </div>
                    <div class="col-md-4 col-xs-12"></div>
					<div class="col-md-4 col-xs-12"><a class="navbar-right">Bernadbear17@gmail.com</a></div>
                </div>
            </div>
        </footer>


    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    

    <!-- jQuery Version 2.1.1 -->
    <script src="{{ URL::asset('js/jquery-2.1.1.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ URL::asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ URL::asset('js/classie.js')}}"></script>
    <script src="{{ URL::asset('js/count-to.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.appear.js')}}"></script>
    <script src="{{ URL::asset('js/cbpAnimatedHeader.js')}}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{ URL::asset('js/jquery.fitvids.js')}}"></script>
	<script src="{{ URL::asset('js/styleswitcher.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ URL::asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{ URL::asset('js/contact_me.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('js/script.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>

</body>

</html>