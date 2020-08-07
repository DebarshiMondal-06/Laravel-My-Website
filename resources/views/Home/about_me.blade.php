<x-index_home>
   @section('section')
      @include('Home.navbar-home')
      <div class="container mt-5">
         <div class="card shadow mb-4">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-4">
                     <img class="ml-2 mt-2" style="border-radius: 10px;" height="80%" width="50%" src="{{ asset('public/img/IMG_20200114_165243.jpg') }}" alt="">
                  </div>
                  <div class="col-md-8">
                     <h3 class="h2 mt-2">Who Am I?</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>

   @endsection
</x-index_home>
