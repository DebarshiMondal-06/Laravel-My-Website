<x-index_home>
	@section('section')
		@include('Home.navbar-home')
		<!-- Header part end-->

		<!-- breadcrumb start-->
		<section class="breadcrumb breadcrumb_bg align-items-center animate__animated animate__zoomIn">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-sm-6">
						<div class="breadcrumb_tittle text-left">
							<h2>Category Page</h2>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="breadcrumb_content text-right">
							<p>Home<span>/</span>Category Page</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- breadcrumb start-->

		<!-- feature_post start-->
		<section class="all_post section_padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 animate__animated animate__zoomIn">
						@foreach ($posts as $all_posts)
							<div class="post-entry-2 d-flex">
								<div class="row">
									<div class="col-md-8">
										<div class="contents order-md-1 pl-0">
											<h2 class="title"><a href="{{ route('readmore', [ 'category' =>$all_posts->categories->slug , 'title' =>$all_posts->slug]) }}" class="h3 mt-2 mb-2">{{ $all_posts->MainTitle }}</a></h2>
											<style>
											.mb-1 a:hover{
												color: red!important;
											}
											.title a{
												text-decoration: none;
											}
											.title a:hover{
												color: red!important;
											}
											</style>
											<p class="mb-1">Category/<a href="{!! route('single_category', $all_posts->categories->slug) !!}" id="info">{{ $all_posts->categories->name }}</a></p>
											<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum

												<a href="{{ route('readmore', [ 'category' =>$all_posts->categories->slug , 'title' =>$all_posts->slug]) }}"> Read More...</a></p>

												<div class="post-meta">
													<span class="d-block text-info"><li class=" text-dark fas fa-user"></li>&nbsp;{{ $all_posts->user->name }} &nbsp;&nbsp;&nbsp;
														<i class="text-dark far fa-clock"></i>&nbsp;{{ $all_posts->created_at->diffforhumans() }} &nbsp;&nbsp;
														<i class="text-danger fas fa-heart"></i>&nbsp;{{ $all_posts->post_likes->count() }}</span>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<style media="screen">
												.badge{
													position: absolute;
													top: 10px;
													left: 0;
												}
												</style>
												<p class="badge badge-pill badge-success"><i class="fas fa-star" style="font-size: 8px;"></i> Recent Posts</p>
												<img height="150px" width="200px" class="thumbnail order-md-2" src="{{ 'public/storage/'.$all_posts->post_image }}" alt="">
											</div>
										</div>
									</div>
									<hr>
									<br>
								@endforeach
							</div>

							<div class="col-lg-4 animate__animated animate__bounceInUp">
								<div class="sidebar_widget">
									<div class="single_sidebar_wiget search_form_widget" style="">
										<label for=""><i class="fas fa-pen-nib fa-2x text-dark"></i><a href="login" style="">&nbsp;<span style="font-size: 1.2em;">Write a Post</span> </a></label>
									</div>
									<div class="single_sidebar_wiget">
										<div class="sidebar_tittle">
											<h3>Categories</h3>
										</div>
										<div class="single_catagory_item category">
											<ul class="list-unstyled">
												@foreach ($categories as $all_category)
													<li><a href="{!! route('single_category',$all_category->slug) !!}">{{ $all_category->name }}</a></li>
												@endforeach
											</ul>
										</div>
									</div>
									<div class="single_sidebar_wiget">
										<div class="sidebar_tittle">
											<h3>Popular Feeds</h3>
										</div>
										<div class="single_catagory_post post_2 ">
											<div class="category_post_img">
												<img src="img/sidebar/sidebar_1.png" alt="">
											</div>
											<div class="post_text_1 pr_30">
												<a href="single-blog.html">
													<h3>Subdue lesser beast winged
														bearing meat tree one</h3>
													</a>
													<p><span> By Michal</span> / March 30</p>
												</div>
											</div>
											<div class="single_catagory_post post_2 ">
												<div class="category_post_img">
													<img src="img/sidebar/sidebar_2.png" alt="">
												</div>
												<div class="post_text_1 pr_30">

													<a href="single-blog.html">
														<h3>Subdue lesser beast winged
															bearing meat tree one</h3>
														</a>
														<p><span> By Michal</span> / March 30</p>
													</div>
												</div>
												<div class="single_catagory_post post_2">
													<div class="category_post_img">
														<img src="img/sidebar/sidebar_3.png" alt="">
													</div>
													<div class="post_text_1 pr_30">
														<a href="single-blog.html">
															<h3>Subdue lesser beast winged
																bearing meat tree one</h3>
															</a>
															<p><span> By Michal</span> / March 30</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- feature_post end-->

						@endsection
					</x-index_home>
