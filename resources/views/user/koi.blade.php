		@extends('Layout/user')

@section('container')




			  <section class="banner-area blog-home-banner2 relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content blog-header-content col-lg-8">
							<h1 class="text-white">
								Tentang Koi		
							</h1>	
							<p class="text-white">
								Penegetahuan dan Informasi menarik seputar jenis Ikan - Ikan Koi 
							</p>
							
						</div>	
					</div>
				</div>
			</section>

<section class="cat-list-area post-content-area single-post-area">
				<div class="container">
					<div class="row">
						@foreach($koi as $koi )
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-list">
							  <img src="{{url('fotokoi/'.$koi->foto) }}" alt="" class="img-fluid">
							  <div class="overlay">
							   <h3><a class="text" href="/koimore/{{$koi->id}}">{{$koi->nama}}</a></h3>
							  </div>
							</div>
						</div>
						@endforeach
																	
					</div>
				</div>	
			</section>

			@endsection