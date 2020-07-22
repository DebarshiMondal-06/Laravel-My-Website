<x-admin_index>
   @section('dashboard_content')

      <h1 class="h3 mb-4 text-gray-800"> DashBoard </h1>
      <div class="row">
         <div class="col-xl-4 col-md-6 mb-3" style="height: 130px;">
            <div class="card border-left-primary shadow h-100 py-1">
               <div class="card-body">
                  <div class="row align-items-center">
                     <div class="col-md-5">
                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Total Blog Post</div>
                        <div class="h5  font-weight-bold text-gray-800 mb-2 mt-2 p-1">{{ $post->count() }} </div>
                        <div class="">
                           <a href="{!! route('view_users') !!}"> View Here </a>
                        </div>
                     </div>
                     <div class="col-md-5 col-md-4">
                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Total Published</div>
                        <div class="h5 font-weight-bold text-gray-800 mb-2 mt-2 p-1">{{ $post_published->count() }} </div>
                        <div class="">
                           <a href="{!! route('view_users') !!}"> View Here </a>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <i class="fas fa-blog fa-2x text-gray-300  ml-2"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-xl-4  mb-3" style="height: 130px;">
            <div class="card border-left-success shadow h-100 py-1">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Total Users Registered</div>
                        <div class="h5  font-weight-bold text-gray-800 mb-2 mt-2 p-1">{{ $users->count() }}</div>
                        <div class="">
                           <a href="{!! route('view_users') !!}"> View Here </a>
                        </div>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-fw fa-users fa-2x text-gray-300 mr-4"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-xl-4  mb-3" style="height: 130px;">
            <div class="card border-left-warning shadow h-100 py-1">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Total Categories</div>
                        <div class="h5  font-weight-bold text-gray-800 mb-2 mt-2 p-1"> {{ $category->count() }} </div>
                        <div class="">
                           <a href="{!! route('view_users') !!}"> View Here </a>
                        </div>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-align-right fa-2x text-gray-300"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-xl-4  mb-3" style="height: 130px;">
            <div class="card border-left-dark shadow h-100 py-1">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Total Roles</div>
                        <div class="h5  font-weight-bold text-gray-800 mb-2 mt-2 p-1"> {{ $roles->count() }} </div>
                        <div class="">
                           <a href="{!! route('view_users') !!}"> View Here </a>
                        </div>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-user-tag fa-2x text-gray-300"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


   @endsection
</x-admin_index>
