		@extends('Layout/user')

@section('container')

			<!-- start banner Area -->
			<section class="banner-area blog-home-banner3 relative" id="home">	
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
			<!-- End banner Area -->				  

			<!-- Start top-category-widget Area -->
			
			
			<!-- Start post-content Area -->
@forelse( $forum as $forum)	
			<section class="top-category-widget-area  ">
			<section class="post-content-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-11 posts-list">
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										
									</ul>
									<div class="user-details row">
										

									</div>
								</div>
<div class="col-lg-12 col-md-12 ">
								

                           <div class="comments-area">
								
								<div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="{{url('aa/img/blog/c1.jpg')}}" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">{{$forum->nama}}</a></h5>
                                                <p class="date">{{$forum->created_at}} </p>
                                                <h5>
                                                   {{$forum->thread}}  
                                                </h5> 
                                                
                                            </div>
                                        </div>
                                     <div class="reply-btn">
                                               <a href="/forum/{{$forum->id}}/edit" class="btn-reply text-uppercase">Edit</a> 
                                        </div>
                                        <div class="reply-btn">
                                               <a href="/forum/{{$forum->id}}/delete" class="btn-reply text-uppercase">Delete</a> 
                                        </div>
                                    </div>
  </div>
                                     
                                     

		                    
		                   	
                                  

								<div class="col-lg-11 col-md-11 ">
									<div class="feature-img">
										<img class="img-fluid" src="{{url('gambar_forum/'.$forum->gambar) }}" alt="">
									</div>
									<a class="posts-title" ><h3>Description</h3></a>
									<p class="excert">
										{{$forum->deskripsi}}
									</p>
									 <div class="comments-area">
								<h4>Comments</h4>
								
	                              

	                              @forelse($forum->comments as $fkomen) 
                                 
								<div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">

                                            <div class="thumb">
                                                <img src="{{url('aa/img/blog/c4.jpg')}}" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">{{$fkomen->nama}}</a></h5>
                                                <p class="date">{{$fkomen->created_at}} </p>
                                                <p class="comment">
                                                   {{$fkomen->komen}}
                                                </p>
                                            </div>
                                          </div>
                                        </div>
                                       </div>	

                                 @empty

                                 <p>NO COMMENT </p>
                                   @endforelse

								
							  
                                 

		                    
						</div>
									</div>

								   </div>
										


                      
						</div>
						</div>

					</div>
				</div>	
			</section>
			</section>


			 @empty

                                 <h2> No Thread </h2>

                                 @endforelse


		  <nav class="blog-pagination  justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item active"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
			

			@endsection