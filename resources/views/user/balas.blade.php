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
									</div>
								   </div>
										


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
						<div class="comment-form">
								<h4>Leave a Comment</h4>
								<form  action="{{route('addComment',$forum->id)}}" method="post">
								@csrf
									  
									<div class="form-group">
										<textarea class="form-control mb-8" rows="10" name="komen" id="komen" placeholder="Write Comment" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Write Comment'" required=""></textarea>
									</div>
									<button type="submit" class="primary-btn text-uppercase">Post Comment</button>	
								</form>
							</div>
						</div>
						</div>

					</div>
				</div>	
			</section>
			</section>


			

			@endsection