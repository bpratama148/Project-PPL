		@extends('Layout/user')

@section('container')
			<!-- start banner Area -->
			<section class="banner-area blog-home-banner4 relative" id="home">	
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
	<section class="top-category-widget-area ">
			<section class="post-content-area">
				<div class="container">
					<div class="row">

						<div class="col-lg-12 col-md-12 ">
									<div class="comment-form">
								<h4>Create a New Post</h4>
								<form action="/galeri"  method="POST" enctype="multipart/form-data">
									@csrf
									
									<div class="form-group">
										<input type="file" class="form-control" id="gambar" name="gambar" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="deskripsi" id="deskripsi" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" required=""></textarea>
									</div>
									<button type="submit"  class="primary-btn text-uppercase">Post Photo</button>	
								</form>
							</div>
						</div>
							</div>
						<div class="col-lg-11 posts-list">
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										
									</ul>
									<div class="user-details row">
																
									</div>
								</div>
          @foreach( $galeri as $galeri) 
								<div class="col-lg-12 col-md-12 ">
									<div class="comments-area">
								         
								<div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="{{url('aa/img/blog/c1.jpg')}}" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a >{{$galeri->nama}}</a></h5>
                                                <p class="date">{{$galeri->created_at}} </p>
                                                
                                            </div>
                                        </div>
                                     
                                    </div>
                                     </div>
									<div class="feature-img">
										<img class="img-fluid" src="{{url('gambar_galeri/'.$galeri->gambar) }}" alt="">
									</div>
									<a class="posts-title" href="blog-single.html"><h3>Description</h3></a>
									<p class="excert">
										{{$galeri->deskripsi}}
									</p>
									<a href="/galeri-balas/{{$galeri->id}}" class="primary-btn">More</a>
								</div>
							</div>
							  @endforeach
																			
		                   
						</div>
						</div>
					</div>
				</div>	
			</section>
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