		@extends('Layout/user')

@section('container')

			<!-- start banner Area -->
			<section class="banner-area blog-home-banner3 relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content blog-header-content col-lg-12">
							<h1 class="text-white">
							Forum Diskusi 				
							</h1>	
							<p class="text-white">
								Forum diskusi terbuka antar pecinta koi , temukanlah informasi bermanfaat dari forum ini
							</p>
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start top-category-widget Area -->
			
			
			<!-- Start post-content Area -->

			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
					
							
								

								<div class="col-lg-12 col-md-12 ">
									<div class="comment-form">
								<h4>Edit Thread</h4>
								<form action="/forum/{{$forum->id}}/update"  method="POST" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<input type="text" class="form-control" id="thread" name="thread" placeholder="{{$forum->thread}}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{{$forum->thread}}'">
									</div>
									<div class="form-group">
										<input type="file" class="form-control" id="gambar" name="gambar" placeholder="{{$forum->gambar}}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{{$forum->gambar}}'">
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="deskripsi" id="deskripsi" placeholder="{{$forum->deskripsi}}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{{$forum->deskripsi}}'" required=""></textarea>
									</div>
									<button type="submit"  class="primary-btn text-uppercase">Edit Thread</button>	
								</form>
							</div>
						</div>
							</div>
							
						</div>
						</div>
					</div>
				</div>	
			</section>
		 
			

			@endsection