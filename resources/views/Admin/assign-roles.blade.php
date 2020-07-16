<x-admin_index>
   @section('view_users')

      <h1 class="h3 mb-5 text-gray-800"> Username : <b>{{ $id->name }}</b> </h1>
      <br>
      <!-- DataTales Example -->
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="card shadow mb-4">
               <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Avialable Roles: <span style="color: black;">{{ $roles->count() }}</span></h6>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                           <tr>
                              <td>Assigned</td>
                              <th>Id</th>
                              <th>Name</th>
                              <th>slug</th>
                              <th> Updated On</th>
                              <th> Operations</th>
                              <th> Operations</th>
                           </tr>
                        </thead>

                        <tbody class="text-center">
                           @foreach ($roles as $all_roles)
                              <tr>
                                 <td><input type="checkbox"
                                    @foreach ($id->roles as $users)
                                       {{ ($users->slug === $all_roles->slug)? 'checked' : "" }}
                                    @endforeach
                                    >
                                 </td>
                                 <td>{{ $all_roles->id }}</td>
                                 <td>{{ $all_roles->name }}</td>
                                 <td>{{ $all_roles->slug }}</td>
                                 <td>{{ $all_roles->updated_at->diffforhumans() }}</td>
                                 <td>
                                    <form action="{!! route('assigned',$id->id) !!}" method="post">
                                       @csrf
                                       @method('PUT')
                                       <input type="hidden" name="role" value="{{ $all_roles->id }}">
                                       <button type="submit" class="btn btn-info"
                                       @if ($id->roles->contains($all_roles))
                                          disabled
                                       @endif
                                       > Assign </button>
                                    </form>

                                 </td>
                                 <td>
                                    <form action="{!! route('detached',$id->id) !!}" method="post">
                                       @csrf
                                       @method('DELETE')
                                       <input type="hidden" name="role_delete" value="{{ $all_roles->id }}">
                                       <button type="submit" class="btn btn-danger"
                                       @if (!($id->roles->contains($all_roles)))
                                          disabled
                                       @endif
                                       > Detach </button>
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
         <div class="col-md-2"></div>
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
