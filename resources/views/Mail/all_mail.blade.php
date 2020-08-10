<x-admin_index>
   @section('view_users')

      <h1 class="h3 mb-4 text-gray-800"> All Received Mails </h1>

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
                     @foreach ($all_mail as $mail_all)
                        <tr>
                           <td>{{ $mail_all->id }}
                              @if ($mail_all->status == 0)
                                 <span class="text-success"><i class="fas fa-star" style="font-size: 1em;"></i></span>
                              @endif
                           </td>
                           <td>{{ $mail_all->username }}</td>
                           <td>{{ $mail_all->useremail }}</td>
                           <td>{{ $mail_all->message }}</td>
                           <td>
                              @if ($mail_all->status == 1)
                                 <span class="font-weight-bold text-success">Checked</span>
                              @else
                                 <a class="font-weight-bold text-danger" href="{!! route('mail_checked',$mail_all->id) !!}">Check Here.</a>
                              @endif
                           </td>
                           <td>{{ $mail_all->created_at->diffforhumans() }}</td>
                           <td> <a href=""><button class="btn btn-danger"> Delete </button></a> </td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
               <br>
               <b>Note: </b><span class="text-success">'<i class="fas fa-star" style="font-size: 8px;"></i>' <b class="text-info">This indicates New Mail or message</b></span>
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
