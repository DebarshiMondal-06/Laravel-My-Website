<x-admin_index>
   @section('view_users')
      <h1 class="h2 mb-5 text-gray-800 p-3"> Username : <b>{{ auth()->user()->name }}</b></h1>
   @endsection
</x-admin_index>