<x-admin_index>
   @section('content')
      <h1 class="h3 text-gray mb-4"> Add Post </h1>
      <link rel="stylesheet" href="{!! asset('css/sb-admin-2.min.css') !!}">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl- col-lg-10 col-md-5">
               <form class="user" action="index.html" method="post">
                  @csrf
                  <div class="form-group">
                     <label for=""> Add title </label>
                     <input type="text" class="form-control" name="" value="">
                  </div>
                  <div class="form-group">
                     <label for="inputState">State</label>
                     <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for=""> Choose Category</label>
                     <textarea name="name" class="form-control" rows="8" cols="80"></textarea>
                  </div>

                  <div class="form-group">
                     <button type="button" class="btn btn-info" name="button"> Submit </button>
                  </div>

               </form>
            </div>
         </div>
      </div>
   @endsection
</x-admin_index>
