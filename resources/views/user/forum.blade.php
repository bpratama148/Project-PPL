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
								<h4>Create a New Thread</h4>
								<form action="/forum"  method="POST" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<input type="text" class="form-control" id="thread" name="thread" placeholder="Thread" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Thread'">
									</div>
									<div class="form-group">
										<input type="file" class="form-control" id="gambar" name="gambar" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="deskripsi" id="deskripsi" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" required=""></textarea>
									</div>
									<button type="submit"  class="primary-btn text-uppercase">Post Thread</button>	
								</form>
							</div>
						</div>
							</div>
							
							@foreach( $forum as $forum)												
		                    
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
                                               <a href="/forum-balas/{{$forum->id}}"  class="btn-reply">Reply</a> 
                                        </div>
                                    </div>
                                    </div>
                                  



                                  
                                </div>	
                                 @endforeach
						</div>
						</div>
					</div>
				</div>	
			</section>


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