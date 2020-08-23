<x-admin_index>
   @section('view_users')
      <h1 class="h2 mb-5 text-gray-800 p-3"> Username : <b>{{ auth()->user()->name }}</b></h1>
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="card shadow mb-4 mt-5">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="username"> Username &nbsp; <a href=""><i class="fas fa-edit"></i></a></label>
                           <span><input type="text" class="form-control" name="" value="{{ auth()->user()->name }} "></span>  
                        </div><hr>
                        <label for="role"> <span class="text-info"><b>Role : </b> &nbsp; <a href=""><i class="fas fa-edit"></i></a></span> <br>
                        @foreach (auth()->user()->roles as $allroles)
                           <b>{{  $allroles->name }}</b>    
                        @endforeach   
                        </label> <br><hr>
                        <label for="blog-post"> <span class="text-info"><b>Blog Post :</b> </span> 
                          {{ auth()->user()->posts()->count() }}  
                           </label>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="email"> Email &nbsp; <a href=""><i class="fas fa-edit"></i></a> </label>
                           <input type="email" class="form-control" name="" value="{{ auth()->user()->email }} ">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-2"></div>
      </div>
   @endsection
</x-admin_index>