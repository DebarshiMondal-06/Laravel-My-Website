<x-index_home>
   @section('section')

      @include('Home.navbar-home')
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
                                       {{ $wise->created_at->diffforhumans() }} &nbsp;&nbsp;&nbsp; <i class="far fa-eye"></i>&nbsp;{{ $wise->post_view }}
                                    </span>
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

         @endsection
      </x-index_home>
