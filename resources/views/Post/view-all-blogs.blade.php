<x-admin_index>
   @section('view_users')

      <h1 class="h3 mb-4 text-gray-800"> View All Blog</h1>
      <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the </p>

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
                        <th>Name</th>
                        <th> Category </th>
                        <th> Title </th>
                        <th> Content </th>
                        <th> Image </th>
                        <th> Created On</th>
                        <th> Updated On</th>
                        <th> Status </th>
                        <th> Delete Item </th>
                     </tr>
                  </thead>

                  <tbody class="text-center">
                     @foreach ($all_blogs as $all_blogss)
                        <tr>
                           <td>{{ $all_blogss->id }}</td>
                           <td>{{ $all_blogss->user->name }}</td>
                           <td>{{ $all_blogss->categories->name }}</td>
                           <td><a href="{!! route('assign-role',$all_blogss->id) !!}">{{ $all_blogss->MainTitle }}</a></td>
                           <td>{!! Str::limit($all_blogss->content, 80) !!}</td>
                           <td>
                              <img height="60px" width="70px" src="{{ asset('public/storage/'.$all_blogss->post_image) }}" alt="picture">
                           </td>
                           <td>{{ $all_blogss->created_at->diffforhumans() }}</td>
                           <td>{{ $all_blogss->updated_at->diffforhumans() }}</td>
                           <td>
                              @if ($all_blogss->Status == 'Published')
                                 {{ 'Published' }}
                              @else
                                 <span class="font-weight-bold text-danger">{{ 'Not Published' }}</span>
                              @endif
                           </td>
                           <td>
                           <form  action="{!! route('delete-blog',$all_blogss->id) !!}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger"> Delete </button>
                           </form>
                         </td>
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
