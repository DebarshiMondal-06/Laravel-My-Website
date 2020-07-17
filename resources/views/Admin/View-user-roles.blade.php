<x-admin_index>
   @section('view_users')

      <h1 class="h3 mb-4 text-gray-800"> Assigned Role Users </h1>
      <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the </p>

      <!-- DataTales Example -->
      <div class="row">
         <div class="col-md-8">
            <div class="card shadow mb-4">
               <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"> Assigned Roles Users</h6>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                           <tr>
                              <th>User Id</th>
                              <th>User Name</th>
                              <th> User Role </th>
                              <th> Assigned On </th>
                              <th> Operations</th>
                           </tr>
                        </thead>

                        <tbody class="text-center">
                           @foreach ($users as $all_users)
                              @foreach ($all_users->roles as $value)
                                 <tr>
                                    <td>{{ $all_users->id }}</td>
                                    <td>{{ $all_users->name }}</td>
                                    <td>
                                       @if ($value->name == 'Admin')
                                          <b>{{ $value->name }}</b>
                                       @else
                                          {{ $value->name }}
                                       @endif
                                    </td>
                                    <td>{{ $value->pivot->created_at->diffforhumans() }}</td>
                                    <td><a href="{!! route('assign-role',$all_users->id) !!}" class="btn btn-info"> View </a></td>
                                 </tr>
                              @endforeach
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4"></div>
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
