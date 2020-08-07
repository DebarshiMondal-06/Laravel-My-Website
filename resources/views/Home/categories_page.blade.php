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
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link href="{!! asset('css/sb-admin-2.min.css') !!}" rel="stylesheet">
   <link
   rel="stylesheet"
   href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
   />
</head>

<body>
   <!--::header part start::-->

   @include('Home.navbar-home')

   <style media="screen">
   .animate__animated.animate__bounceInUp {
      --animate-duration: 1.8s;
   }
   </style>



   <section class="all_post section_padding">
      <div class="container" style="margin-top: -8%;">
         <h1 class="h2 mb-5 text-gray-800"> <a href="{!! route('/') !!}" class="font-italic">Category</a>/{{ $category->name }}</h1>
         <div class="row">
            <div class="col-md-8 animate__animated animate__zoomIn">
               @foreach ($single_blog as $wise)
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-4">
                              <img style="border-radius: 10px;" height="100%" width="100%" src="{{ asset('public/storage/'.$wise->post_image) }}" alt="">
                           </div>
                           <div class="col-md-8">
                              <h4 class="h3 mt-2 mb-2 p-1">{{ $wise->MainTitle }}</h4>
                              <div class="post-meta mb-1 p-1">
                                 <span class="d-block text-info"><li class=" text-dark fas fa-user"></li>&nbsp;{{ $wise->user->name }} &nbsp;&nbsp;&nbsp; <i class="text-dark far fa-clock"></i>&nbsp;
                                    {{ $wise->created_at->diffforhumans() }} &nbsp;&nbsp;&nbsp; <i class="far fa-eye"></i>&nbsp;{{ $wise->post_view }}</span>
                                 </div>
                                 <p class="mb-3 p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum
                                    <a href="{{ route('readmore', [ 'category' =>$wise->categories->slug , 'title' =>$wise->slug]) }}"> Read More...</a></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     @endforeach
                  </div>
                  <div class="col-md-4 animate__animated animate__bounceInUp">
                     <div class="card shadow mb-4">
                        <div class="card-body">
                           <h4 class="h4 mt-2 mb-3 p-1 text-uppercase" style="text-decoration: underline;">Popular Post</h4>
                           @foreach ($popular_post as $popular)
                              <p class="" style="line-height: 0.8;"><a href="{{ route('readmore', [ 'category' =>$popular->categories->slug , 'title' =>$popular->slug]) }}">{{ $popular->MainTitle }}</a></p>
                              <div class="post-meta p-1" style="margin-top: -8px;">
                                 <span class="d-block text-info"><li class=" text-dark fas fa-user"></li>&nbsp;{{ $popular->user->name }} &nbsp;&nbsp;&nbsp; <i class="text-dark far fa-clock"></i>&nbsp;{{ $popular->created_at->diffforhumans() }}</span>
                              </div>
                              <hr>
                           @endforeach
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
