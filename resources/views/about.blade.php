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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/color/blue.css')}}">
    
    
    
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
        
<!-- Styleswitcher End
================================================== -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container navbar-collapse navbar-inverse navbar-fixed-top">
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
                        <a class="page-scroll" href="/">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="list">List</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="forum">Forum</a>
                    </li>
                    <li>
                        <a class="page-scroll">About</a>
                    </li></ul>
					
                    @if (Route::has('login'))
                    @if (Auth::check())<ul class="nav navbar-nav navbar-right">
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
    <div class="cbox">
    	<div class="kbox">
    	<h3>DISCLAIMER<h3>
		<span>Segala konten yang ada merupakan saduan dari website lain. jika Anda merasa bahwa konten kami merupakan karya cipta Anda, harap hubungi kontak berikut.</span>
		<P>bernadbear17@gmail.com</P>
    	</div>
		<div class="kbox">
		<h3>LINKS</h3>
		<span>
		<a href="URL::('ganool.se')">Ganool</a></br><a href="IMDb.com">IMDb</a></br><a href="lk21.org">LK21</a>
		</span>
		</div>
	</div>
    
        <footer class="style-1 navbar-fixed-bottom">
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
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>