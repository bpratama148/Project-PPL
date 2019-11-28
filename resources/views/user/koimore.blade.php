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

      <section class="home-about-area">
      	<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30">{{$koi->nama}}</h3>
						<div class="row">
							<div class="col-md-3">
								<img src="{{url('fotokoi/'.$koi->foto) }}" alt="" class="img-fluid">
							</div>
							<div class="col-md-9 mt-sm-20">
								<blockquote class="generic-blockquote">
									<h2>{{$koi->jenis}}</h2>
									<p> 
								     <p>{{$koi->deskripsi}}</p>
								     </p>
								   
                                  </blockquote>
							</div>
						</div>
					</div>

				
			</section>



@endsection