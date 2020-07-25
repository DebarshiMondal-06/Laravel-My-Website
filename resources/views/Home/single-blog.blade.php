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
   @include('Home.navbar-home')

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area all_post section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <img height="350px" width="700px" src="{!! asset('public/storage/'.$readmore->post_image) !!}" alt="">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="img/blog/single_blog_1.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{ $readmore->MainTitle }}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="fas fa-stream"></i> <a href="" style="color: #56BAF8!important">Category</a>/ {{ $readmore->categories->name }}</li>
                        <li><i class="fas fa-user"></i> {{ $readmore->user->name }}</li>
                        <li><i class="far fa-eye"></i> {{ $readmore->post_view }}</li>
                     </ul>
                     <p class="excert">
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                        fraction of the camp price. However, who has the willpower
                     </p>
                  </div>
               </div>
                  <div class="comments-area">
                     <h4>05 Comments</h4>
                     <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <img src="img/comment/comment_1.png" alt="">
                              </div>
                              <div class="desc">
                                 <p class="comment">
                                    Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                    Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a href="#">Emilly Blunt</a>
                                       </h5>
                                       <p class="date">December 4, 2017 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                       <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="sidebar_widget">
                     <div class="single_sidebar_wiget">
                        <div class="sidebar_tittle">
                           <h3>Categories</h3>
                        </div>
                        <div class="single_catagory_item category">
                           <ul class="list-unstyled">
                              @foreach ($categories as $all_category)
                                 <li><a href="{!! route('single_category',$all_category->id) !!}">{{ $all_category->name }}</a></li>
                              @endforeach
                           </ul>
                        </div>
                     </div>
                     <div class="single_sidebar_wiget">
                        <div class="sidebar_tittle">
                           <h3>Popular Feeds</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--================Blog Area end =================-->




         <script src="{!! asset('js/themejs/jquery-1.12.1.min.js') !!}"></script>
         <script src="{!! asset('js/themejs/custom.js') !!}"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

      </body>

      </html>
