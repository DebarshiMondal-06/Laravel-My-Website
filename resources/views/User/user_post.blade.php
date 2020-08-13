<x-admin_index>
   @section('user-dashboard')
      <style media="screen">
         .card{
            border-radius: 10px;
         }
      </style>
      <h2 class="h1">Blog Posted</h2>
      <div class="row mt-5">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="card shadow mb-4 mt-5">
               <div class="card-body text-center">
                  <i class="fas fa-poop fa-3x"></i>
                  <h4 class="h4 mt-2"><b class="text-warning">Oops!</b> Nothing has been posted so far from you! </h4>
                  <h4 class="h5 p-2"><i class="fas fa-tools"> &nbsp;</i><a href="">Post a blog here.</a></h4>
               </div>
            </div>
         </div>
      </div>
   @endsection
</x-admin_index>
