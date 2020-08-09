<x-admin_index>
   @section('view_users')

      <h1 class="h3 mb-4 text-gray-800"> New Emails </h1>
      <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the </p>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Email Checked</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th>Id</th>
                        <th>Sender Mail</th>
                        <th> Sender Addresss </th>
                        <th>Message</th>
                        <th>Status</th>
                        <th> Send On </th>
                        <th> Delete Item </th>
                     </tr>
                  </thead>

                  <tbody class="text-center">
                     @foreach ($get_mail as $mail_info)
                        <tr>
                           <td>{{ $mail_info->id }}</td>
                           <td>{{ $mail_info->username }}</td>
                           <td>{{ $mail_info->useremail }}</td>
                           <td>{{ $mail_info->message }}</td>
                           <td>
                              @if ($mail_info->status == 1)
                                 <span class="font-weight-bold text-success">Checked</span>
                              @endif
                           </td>
                           <td>{{ $mail_info->created_at->diffforhumans() }}</td>
                           <td> <a href=""><button class="btn btn-danger"> Delete </button></a> </td>
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
