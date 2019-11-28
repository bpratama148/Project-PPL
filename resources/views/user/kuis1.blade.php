		@extends('Layout/user')

@section('container')


			<section class="banner-area blog-home-banner relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content blog-header-content col-lg-12">
							<h1 class="text-white">
								Dude You’re Getting
								a Telescope				
							</h1>	
							<p class="text-white">
								There is a moment in the life of any aspiring astronomer that it is time to buy that first
							</p>
							
						</div>	
					</div>
				</div>
			</section>

	
<section class="Volunteer-form-area section-gap ">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-20">Bagaimana Keadaan Sisik dan Kulit Ikan Anda?</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
					</div>						
						

						  <form class="form-group" method="post" action="/gejala">
							@csrf
                            <div class="form-group ">
                            	@foreach ($gejalaA as $gejalaA)
                                <div class="form-check form-check-inline col-6 mb-30">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio"  name="gejala1" id="gejala1" value="{{$gejalaA->value}}"> {{$gejalaA->nama}}
                                    </label>
                                </div>
                                @endforeach

                               
                       
                                		  
						 
			
		<section class="Volunteer-form-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-20">Bagaimana Keadaan Sirip dan Ekor Ikan Anda?</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
					</div>						
						

						  <form class="form-group" method="post" action="/gejala">
							@csrf
                            <div class="form-group ">
                            	@foreach ($gejalaB as $gejalaB)
                                <div class="form-check form-check-inline col-6 mb-30">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio"  name="gejala2" id="gejala2" value="{{$gejalaB->value}}"> {{$gejalaB->nama}}
                                    </label>
                                </div>
                                @endforeach



                               

               <section class="Volunteer-form-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-20">Bagaimana Keadaan Mata Ikan Anda?</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
					</div>						
						

						  <form class="form-group" method="post" action="/gejala">
							@csrf
                            <div class="form-group ">
                            	@foreach ($gejalaC as $gejalaC)
                                <div class="form-check form-check-inline col-6 mb-30">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio"  name="gejala3" id="gejala3" value="{{$gejalaC->value}}"> {{$gejalaC->nama}}
                                    </label>
                                </div>
                                @endforeach


                                <section class="Volunteer-form-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-20">Bagaimana Keadaan Sikap Ikan Anda?</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
					</div>						
						

						  <form class="form-group" method="post" action="/gejala">
							@csrf
                            <div class="form-group ">
                            	@foreach ($gejalaD as $gejalaD)
                                <div class="form-check form-check-inline col-6 mb-30">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio"  name="gejala4" id="gejala4" value="{{$gejalaD->value}}"> {{$gejalaD->nama}}
                                    </label>
                                </div>
                                @endforeach

                                 <section class="Volunteer-form-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-20">Bagaimana Kondisi dan Bentuk Tubuh Ikan Anda?</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
					</div>						
						

						  <form class="form-group" method="post" action="/gejala">
							@csrf
                            <div class="form-group ">
                            	@foreach ($gejalaE as $gejalaE)
                                <div class="form-check form-check-inline col-6 mb-30">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio"  name="gejala5" id="gejala5" value="{{$gejalaE->value}}"> {{$gejalaE->nama}}
                                    </label>
                                </div>
                                @endforeach


                                 <section class="Volunteer-form-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-20">Apakah Ada Gejala lain pada Ikan Anda?</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
					</div>						
						

						  <form class="form-group" method="post" action="/gejala">
							@csrf
                            <div class="form-group ">
                            	@foreach ($gejalaF as $gejalaF)
                                <div class="form-check form-check-inline col-6 mb-30">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio"  name="gejala6" id="gejala6" value="{{$gejalaF->value}}"> {{$gejalaF->nama}}
                                    </label>
                                </div>
                                @endforeach


                               
                                <div class="section-gap1 col-6">
                                  <button type="submit" class="primary-btn float-center mt-30">
                                  	  Submit
                                  </button>
                                   </div>
                      
                     
                                		  
						 
						</form>
					</div>
				</div>
							</form>
					</div>
				</div>	
			
	          </form>
					</div>
				</div>	
			
</form>
					</div>
				</div>	
			
</form>
					</div>
				</div>	
			
</form>
					</div>
				</div>	
			

			</section>
			</section>
			</section>
			</section>
			</section>
			
			</section>
		

				@endsection