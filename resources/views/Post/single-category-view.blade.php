<x-admin_index>
   @section('view_users')

      <h1 class="h3 mb-4 text-gray-800"> View Post Category Single : <b>{{ $view_category_name->name }}</b> </h1>

      <!-- DataTales Example -->
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
                        <th>Main Title</th>
                        <th> Category </th>
                        <th>Post View</th>
                        <th> Created On</th>
                        {{-- <th> Updated On</th> --}}
                     </tr>
                  </thead>

                  <tbody class="text-center">
                     @foreach ($view_modal as $single_category)
                        <tr>
                           <td>{{ $single_category->id }}</td>
                           <td>{{ $single_category->MainTitle }}</td>
                           <td>{{ $single_category->categories->name }}</td>
                           <td>
                              @if ($single_category->post_view)
                                 {{ $single_category->post_view }}
                              @else
                                 <b>{{ 0 }}</b>
                              @endif
                           </td>
                           <td>{{ $single_category->created_at->diffforhumans() }}</td>
                           {{-- <td>{{ $single_category->updated_at->diffforhumans() }}</td> --}}
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
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
