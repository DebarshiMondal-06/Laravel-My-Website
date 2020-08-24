<x-admin_index>
   @section('view_users')
   <h1 class="h2 mb-5 text-gray-800 p-3"> User Profile : <b> {{ auth()->user()->name }}</b></h1>
   <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
         <div class="card shadow mb-4 mt-5 p-4">
            <style>
               .card {
                  border-radius: 15px;
               }
            </style>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="username"> <span style="font-size: 18px;">Username</span> &nbsp; <a href="">
                              <i class="fas fa-edit"></i></a></label>
                        <span><input type="text" class="form-control" name="" value="{{ auth()->user()->name }} "
                              disabled></span>
                     </div>
                     <hr>
                     <label for="role"> <span class="text-info" style="font-size: 18px;"> Role : &nbsp; </span>
                        @foreach (auth()->user()->roles as $allroles)
                        <b style="font-size: 14px;">{{  $allroles->name }}</b>
                        @endforeach
                     </label>
                     <br>
                     <hr>
                     <label for="blog-post"><span class="text-info" style="font-size: 18px;"> Blog Post : &nbsp; </span>
                        &nbsp;<b style="font-size: 15px;">{{ auth()->user()->posts()->count() }}</b>
                     </label>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="email"> <span style="font-size: 18px;"> Email </span> &nbsp; <a href=""><i
                                 class="fas fa-edit"></i></a> </label>
                        <input type="email" class="form-control" name="" value="{{ auth()->user()->email }} " disabled>
                     </div>
                     <div class="form-group">
                        <label for="photo"> <span style="font-size: 18px;"> User Photo </span> &nbsp; <a href="">
                              <i class="fas fa-edit"></i></a> </label><br>
                        <input type="file">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-1"></div>
   </div>
   @endsection
</x-admin_index>