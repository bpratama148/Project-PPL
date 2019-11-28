<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{url('bb/img/fav.png')}}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Daftar</title>

	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{url('bb/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/slider.min.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/pweb.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/main.css')}}">
</head>

<body>
		
	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12 " >
					<div class="login_form_inner">
						<h3>Create New Account</h3>
						<form action="/daftar" class="row login_form"  method="post" >

							@csrf
							<div class="col-md-12 form-group">
								<input type="text" class="form-control"  name="name" placeholder="Name" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control"  name="email" placeholder="E-Mail" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="Password" class="form-control"  name="password" placeholder="Password" required>
							</div>
						
				     		
						
							<div class="col-md-12 form-group">
								<div class="creat_account">
									
									
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit"  class="primary-btn"  
								>Sign Up</button>
								<a href="/">Back</a>
								<a></a>
							</div>


						</form>
						


					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				
	<!-- End footer Area -->


	<script src="{{url('bb/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{url('bb/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.sticky.js')}}"></script>
	<script src="{{url('bb/js/nouislider.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{url('bb/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{url('bb/js/gmaps.min.js')}}"></script>
	<script src="{{url('bb/js/main.js')}}"></script>
</body>

</html>