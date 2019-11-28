	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>E - KOI ?</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{url('aa/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{url('aa/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{url('aa/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{url('aa/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{url('aa/css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{url('aa/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{url('aa/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{url('aa/css/main.css')}}">
		</head>
		<body class="blog-page">	
			 <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				       
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="/pengguna">Home</a></li>
				          <li><a href="/pengguna-koi">Tentang Koi</a></li>
				          <li><a href="/pengguna-diagnosa">Diagnosa</a></li>
				       
				          <li><a href="/pengguna-forum">Forum</a></li>
				          <li><a href="/pengguna-galeri">Gallery</a></li> 					          
				          <li class="nav-item submenu dropdown">
                                <a href="#" class="menu-has-children" >Account</a>
                                <ul class="dropdown-menu">
                                  
                                   <li class="nav-item"><a class="nav-link" href="{{route('mygallery', Auth::user()->name  ) }}">My Gallery</a></li>
                                      <li class="nav-item"><a class="nav-link" href="{{route('mypost', Auth::user()->name  ) }}">My Post</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                                    
                                </ul>
                            </li> 		              
				        </ul>
				      </nav>	    		
			    	</div>
			    </div>
			  </header> 

			  @yield('container')

			  <script src="{{url('aa/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{url('aa/js/vendor/bootstrap.min.js')}}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{url('aa/js/easing.min.js')}}"></script>			
			<script src="{{url('aa/js/hoverIntent.js')}}"></script>
			<script src="{{url('aa/js/superfish.min.js')}}"></script>	
			<script src="{{url('aa/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{url('aa/js/jquery.magnific-popup.min.js')}}"></script>	
			<script src="{{url('aa/js/owl.carousel.min.js')}}"></script>						
			<script src="{{url('aa/js/jquery.nice-select.min.js')}}"></script>							
			<script src="{{url('aa/js/mail-script.js')}}"></script>	
			<script src="{{url('aa/js/main.js')}}"></script>	
		</body>
	</html>