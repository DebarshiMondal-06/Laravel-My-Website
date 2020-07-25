<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> BLOG || HOME</title>
	<link rel="icon" href="{!! asset('public/img/pencil.png') !!}">
	<link rel="stylesheet" href="css/theme/animate.css">
	<!-- themify CSS -->
	<link rel="stylesheet" href="{!! asset('css/themify-icons.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/theme/style.css') !!}">
	{{-- <link rel="stylesheet" href="{!! asset('css/style.css') !!}"> --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
	<!--::header part start::-->
	@include('Home.navbar-home')
	<!-- Header part end-->

	<!-- breadcrumb start-->
	<section class="breadcrumb breadcrumb_bg align-items-center">
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
				<div class="col-lg-8">
					@foreach ($posts as $all_posts)
						<div class="post-entry-2 d-flex">
							<div class="row">
								<div class="col-md-8">
									<div class="contents order-md-1 pl-0">
										<h2 class="title"><a href="{!! route('readmore',$all_posts->slug) !!}" class="text-dark">{{ $all_posts->MainTitle }}</a></h2>
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
										<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum<a href="{!! route('readmore', $all_posts->slug) !!}"> Read More...</a></p>
										<div class="post-meta">
											<span class="d-block text-info"><li class=" text-dark fas fa-user"></li>&nbsp;{{ $all_posts->user->name }} &nbsp;&nbsp;&nbsp; <i class="text-dark far fa-clock"></i>&nbsp;{{ $all_posts->created_at->diffforhumans() }}</span>
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

				<div class="col-lg-4">
					<div class="sidebar_widget">
						<div class="single_sidebar_wiget search_form_widget" style="">
							<label for=""><i class="fas fa-pen-nib fa-2x"></i><a href="login" style="">&nbsp;<span style="font-size: 1.2em;">Write a Post</span> </a></label>
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





				<!-- jquery plugins here-->
				<!-- jquery -->
				<script src="{!! asset('js/themejs/jquery-1.12.1.min.js') !!}"></script>
				<script src="{!! asset('js/themejs/custom.js') !!}"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
			</body>

			</html>
