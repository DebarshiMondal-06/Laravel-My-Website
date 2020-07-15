<x-admin_index>

   @section('content')
      <div class="row">
         <div class="col-md-8">
            <h1 class="mb-3 text-gray-800"> Category </h1>
            <p class="mb-4">Category Should Be Based on AWS services & features.</p>
         </div>
         <div class="col-md-4">
            @if (Session::has('success'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Congo!</strong> {{ Session::get('success') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
            @endif
         </div>
      </div>

      <!-- DataTales Example -->
      <div class="row">
         <div class="col-md-4">
            <h4 class="h5 text-center">Create Category here</h4>
            <form class="" action="{!! route('create-category') !!}" method="post">
               @csrf
               <div class="form-group">
                  <label for="inputAddress"></label>
                  <input type="text" required name="category" class="form-control" id="inputAddress" placeholder="Enter a desired Category" style="border-radius: 20px;">
               </div>
               <button type="submit" class="btn btn-info btn-block" style="border-radius: 20px;" name="button"> Create </button>
            </form>
         </div>
         <div class="col-md-8">
            <h4 class="h5 text-center mb-4">View Category</h4>
            <div class="card shadow mb-4">
               <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                           <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>slug</th>
                              <th> Created On</th>
                              <th> Updated On</th>
                              <th> Delete Item </th>
                           </tr>
                        </thead>

                        <tbody class="text-center">
                           @foreach ($category as $all_category)
                              <tr>
                                 <td>{{ $all_category->id }}</td>
                                 <td>{{ $all_category->name }}</td>
                                 <td>{{ $all_category->slug }}</td>
                                 <td>{{ $all_category->created_at->diffforhumans() }}</td>
                                 <td>{{ $all_category->updated_at->diffforhumans() }}</td>
                                 <td>
                                    <form class="" action="{!! route('delete-category',$all_category->id) !!}" method="post">
                                       @csrf
                                       @method('DELETE')
                                       <button class="btn btn-danger"> Delete</button>
                                    </form>
                                 </td>
                              </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="col"></div>
      </div>

   @endsection

   @section('scripts_tables')

      <script type="text/javascript">
      $(document).ready(function() {
         $('#dataTable').DataTable();
      });
      </script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>


   @endsection

</x-admin_index>
