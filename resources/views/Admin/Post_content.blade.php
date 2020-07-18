<x-admin_index>
   @section('content')
      <x-editor></x-editor>
      <h1 class="h3 text-gray mb-4"> Add Post </h1>
      <link rel="stylesheet" href="{!! asset('css/sb-admin-2.min.css') !!}">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl- col-lg-10 col-md-5">
               <form class="user" action="{!! route('checked') !!}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                  <div class="form-group">
                     <label for=""> Add title </label>
                     <input type="text" class="form-control" name="MainTitle" value="">
                  </div>
                  <div class="form-group">
                     <label for="inputState"> Category </label>
                     <select name="categories_id" id="inputState" class="form-control">
                        @foreach ($category as $all_category)
                           <option value="{{ $all_category->id }}"> {{ $all_category->name  }}</option>
                        @endforeach
                     </select>
                  </div><br>
                  <div class="form-group">
                     <input type="file" name="post_image">
                  </div>
                  <div class="form-group">
                     <label for=""> Body </label>
                     <textarea name="content" class="form-control" rows="8" cols="80"></textarea>
                  </div>

                  <div class="form-group">
                     <button type="submit" class="btn btn-info"> Submit </button>
                  </div>

               </form>
            </div>
         </div>
      </div>
   @endsection
</x-admin_index>
