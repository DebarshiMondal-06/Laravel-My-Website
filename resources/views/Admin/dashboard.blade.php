<x-admin_index>
   @section('mail')
      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-envelope fa-fw text-dark"></i>
         <!-- Counter - Messages -->
         <span class="badge badge-danger badge-counter">{{ $emailnotify->count() }}</span>
      </a>
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
         <h6 class="dropdown-header">
            Message Center
         </h6>
         @foreach ($emailnotify as $new_mails)
            <a class="dropdown-item d-flex align-items-center" href="{!! route('mail_checked',$new_mails->id) !!}">
               <div>
                  <div class="text-truncate text-primary"><b class="text-dark">Message:</b> {{ $new_mails->message }}</div>
                  <div class="small text-dark font-weight-bold"><b class="text-dark">By, </b> &nbsp;{{ $new_mails->username }} &nbsp;&nbsp;<span class="text-info">{{ $new_mails->created_at->diffforhumans() }} </span></div>
               </div>
            </a>
         @endforeach
      </div>
   @endsection
   @section('dashboard_content')
      <h1 class="h2 mb-4 font-weight-bold text-gray-800"> DashBoard </h1>

      <h1 class="h4 mb-4 font-weight-bold text-gray-800"> Blog: </h1>
      <div class="row">
         <div class="col-xl-4  mb-3" style="height: 130px;">
            <div class="card border-left-primary shadow h-100 py-1">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Not Blog Post</div>
                        <div class="h5  font-weight-bold text-gray-800 mb-2 mt-2 p-1">{{ $post_not_published->count() }} </div>
                        <div class="">
                           <a href="{!! route('view-blog-not') !!}"> View Here </a>
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
            <div class="card border-left-success shadow h-100 py-1">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Total Published</div>
                        <div class="h5 font-weight-bold text-gray-800 mb-2 mt-2 p-1">{{ $post_published->count() }} </div>
                        <div class="">
                           <a href="{!! route('published-blog-view') !!}"> View Here </a>
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
            <div class="card border-left-success shadow h-100 py-1">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Total Blogs Created</div>
                        <div class="h5  font-weight-bold text-gray-800 mb-2 mt-2 p-1"> {{ $post->count() }} </div>
                        <div class="">
                           <a href="{!! route('total-blogs') !!}"> View Here </a>
                        </div>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-fw fa-users fa-2x text-gray-300 mr-4"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <hr>

      <h1 class="h4 mb-4 font-weight-bold text-gray-800"> Users: </h1>
      <div class="row">
         <div class="col-xl-4  mb-3" style="height: 130px;">
            <div class="card border-left-dark shadow h-100 py-1">
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
                        <i class="fas fa-user-tag fa-2x text-gray-300"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <hr>

      <h1 class="h4 mb-4 font-weight-bold text-gray-800"> Category: </h1>
      <div class="row">
         <div class="col-xl-4  mb-3" style="height: 130px;">
            <div class="card border-left-warning shadow h-100 py-1">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Total Categories</div>
                        <div class="h5  font-weight-bold text-gray-800 mb-2 mt-2 p-1"> {{ $category->count() }} </div>
                        <div class="">
                           <a href="{!! route('view-create-category') !!}"> View Here </a>
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

      <hr>
      <h1 class="h4 mb-4 font-weight-bold text-gray-800"> Roles: </h1>
      <div class="row">
         <div class="col-xl-4  mb-3" style="height: 130px;">
            <div class="card border-left-dark shadow h-100 py-1">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Total Roles</div>
                        <div class="h5  font-weight-bold text-gray-800 mb-2 mt-2 p-1"> {{ $roles->count() }} </div>
                        <div class="">
                           <a href="{!! route('role-view') !!}"> View Here </a>
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
