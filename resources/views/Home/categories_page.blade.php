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
</head>

<body>
   <!--::header part start::-->
   <header class="main_menu">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="index.html"> <b style="font-style: italic; font-size: 1.5em">DΣBΛЯƧΉI</b> </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="archive.html">Archive</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="category.html"> Category</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pages
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="single-blog.html">Single blog</a>
                              <a class="dropdown-item" href="elements.html">elements</a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="header_social_icon d-none d-lg-block">
                     <ul>
                        <style>
                        .d-none {
                           margin-top: 20px;
                           word-spacing: 5px;
                        }
                        </style>
                        <li><a href="#" class=""><i class="fab fa-facebook-square fa-2x"></i></a></li>
                        <li><a href="#"> <i class="fab fa-linkedin fa-2x"></i></a></li>
                        <li><a href="#"><b><i class="fab fa-instagram fa-2x"></i></b></a></li>
                        <li><a href="#"><i class="fab fa-skype fa-2x"></i></a></li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>

   <section class="all_post section_padding">
      <div class="container" style="margin-top: -8%;">
         <h1 class="h2 mb-5 text-gray-800"> <a href="" class="font-italic">Category</a>/{{ $category->name }}</h1>
         <div class="row">
            <div class="col-md-8">
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
                                 <span class="d-block text-info"><li class=" text-dark fas fa-user"></li>&nbsp;{{ $wise->user->name }} &nbsp;&nbsp;&nbsp; <i class="text-dark far fa-clock"></i>&nbsp;{{ $wise->created_at->diffforhumans() }}</span>
                              </div>
                              <p class="mb-3 p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum<a href=""> Read More...</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
            <div class="col-md-4">
               <div class="card shadow mb-4">
                  <div class="card-body">
                     <h4 class="h4 mt-2 mb-3 p-1 text-uppercase" style="text-decoration: underline;">Popular Post</h4>
                     @foreach ($popular_post as $popular)
                        <p class="" style="line-height: 0.8;"><a href="{{ $popular->id }}">{{ $popular->MainTitle }}</a></p>
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
