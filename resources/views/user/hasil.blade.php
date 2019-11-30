@extends('Layout/user')

@section('container')




			<section class="banner-area blog-home-banner relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content blog-header-content col-lg-12">
							<h1 class="text-white">
								Hasil Diagnosa			
							</h1>	
							<p class="text-white">
								Dapatkan Solusi Perawatan dan Pemeliharaan Ikan Koi di Tips Budidaya
							</p>
							
						</div>	
					</div>
				</div>
			</section>


 @foreach($hasil as $hasil) 
				<section class="Volunteer-form-area section-gap">
				<div class="container"> 
					<div class="row d-flex justify-content-center">
						 
						<div class="menu-content pb-60 col-lg-9">

							<div class="title text-center">
								
				   
								<h1 class="mb-20"> 
                     
                     
                
				                
                          @if ($hasil->total == 87)
                           Ikan Anda Terkena Penyakit "White Spot"
                        
                           
                                     
                                 @elseif ($hasil->total == 100)
                                Ikan Anda Terkena Penyakit "Cloudy Eyes"

                                @elseif ($hasil->total == 108)
                                Ikan Anda Terkena Penyakit "Dropsy"
                           
                               @elseif ($hasil->total == 81)
                                Ikan Anda Terkena Penyakit "Dropsy"

                                @elseif ($hasil->total == 80)
                               Ikan Anda Terkena Penyakit "Pembusukan Sirip dan Ekor"


                                @elseif ($hasil->total == 96)
                               Ikan Anda Terkena Penyakit "KHV"

                                @elseif ($hasil->total == 88)
                               Ikan Anda Terkena Penyakit "Chilodinellasis"
                           
                               @elseif ($hasil->total == 92)
                              Ikan Anda Terkena Penyakit "Chilodinellasis"

                               @elseif ($hasil->total == 109)
                               Ikan Anda Terkena Penyakit "Kutu Jangkar" 

                               @elseif ($hasil->total == 103)
                               Ikan Anda Terkena Penyakit "KHV" 

                               @elseif ($hasil->total ==97)
                               Ikan Anda Terkena Penyakit "Cloudy Eyes"

                               @elseif ($hasil->total == 112)
                               Ikan Anda Terkena Penyakit "Pembusukan Sirip dan Ekor"

                               @elseif ($hasil->total == 114)
                                Ikan Anda Terkena Penyakit "Kutu jangkar"
                              
                               @elseif ($hasil->total == 91) 
                               Ikan Anda Baik - Baik Saja   
                               
                               
                             
                           
                            @else
                               Masih Belum ada Hasil Diagnosa yg Sesuai
                            
                            @endif


                            
                            
								</h1>

 
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							</div>
							
							<a href="/hasil/{{$hasil->hasil_id}}/delete" class="primary-btn float-center  mt-30">
                                  	  Oke
                                  </a>		
						</div>
					</div>	     
                               
                                		  
					</div>
				</div>
				   
						</section>
	@endforeach  

 

@endsection


                           