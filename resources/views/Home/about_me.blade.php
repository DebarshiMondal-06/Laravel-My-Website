<x-index_home>
   @section('section')
      @include('Home.navbar-home')
      <div class="container mt-5">
         <div class="card shadow mb-4">
            <div class="card-body">
               <div class="row">
                  <div class="col-sm-3 text-center">
                     <img class="mt-2 card-img-top mb-1" style="border-radius: 20px; max-height: 250px;" src="{{ asset('public/img/IMG_20200114_165243.jpg') }}" alt="">
                     <br><h2 class="h4 mt-2"> Jr. Web Developer</h2>
                     <h5 style="color: black;"> +916296819112 </h5>
                     <h5 style="color: black;"> debopiku1122@gmail.com </h5>
                  </div>
                  <br>
                  <br>
                  <div class="col-md-8">
                     <h3 class="h2 mt-2">Who Am I?</h3>
                     <div class="ml-3">
                        <p style="color: black!important;"> Well, Serious and Passionate Web developer Lorem ipsum dolor sit amet,
                           consectetur adipisicing elit. Esse officiis asperiores quis voluptas nobis, officia debitis reprehenderit
                           nostrum ex maxime, ipsam voluptatem voluptatum consequatur! Quia asperiores, laborum rem aliquid nihil nesciunt,
                           facilis, ab illo recusandae atque incidunt minus accusamus ratione! Lorem ipsum dolor sit amet, consectetur
                           adipisicing elit. Perspiciatis neque voluptas architecto vel sequi sunt illum quae ea perferendis consectetur quos
                           autem eius, iusto non corporis mollitia ullam quidem repellendus commodi suscipit incidunt natus accusamus!
                           Voluptatum dignissimos officiis incidunt iusto. </p>
                        </div>
                        <hr>
                        <div>
                           <h3 class="h4">Check Out Me Here!</h3>
                           <div class="row">
                              <div class="col-md-9">
                                 <h4 class="ml-2 mt-3"><a href=""><i class="fab fa-facebook"></i></a>&nbsp; &nbsp;<a href=""><i class="fab fa-github"></i></a>
                                    &nbsp; &nbsp;<a href=""><i class="fab fa-linkedin"></i></a></h4>
                                 </div>
                                 <div class="col-sm-3">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"> Get Contact </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <style>
            .modal-header-primary {
               color:#fff;
               padding:19px 15px;
               border-bottom:1px solid #eee;
               background-color: #428bca;
               -webkit-border-top-left-radius: 5px;
               -webkit-border-top-right-radius: 5px;
               -moz-border-radius-topleft: 5px;
               -moz-border-radius-topright: 5px;
               border-top-left-radius: 5px;
               border-top-right-radius: 5px;
               max-width: 100%;
            }
         </style>
         <!-- Modal -->
         <div class="modal fade" style="border-radius: 15px;" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header modal-header-primary">
                     <h5 class="modal-title" id="exampleModalLongTitle">Contact Me!</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <form class="" action="index.html" method="post">
                        <div class="input-group mb-3">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">@</span>
                           </div>
                           <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                           </div>
                           <input type="text" class="form-control" placeholder="Username" aria-label="Your Mail" aria-describedby="basic-addon1">
                        </div>
                        <textarea placeholder="Put a Message!" class="form-control" name="name" rows="8" cols="80"></textarea>
                        <br>
                        <div class="text-center">
                           <button style="width: 120px;" type="submit" class="btn btn-primary"> Send <i class="fas fa-paper-plane"></i> </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>

      @endsection
   </x-index_home>
