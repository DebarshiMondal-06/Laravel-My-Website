<x-admin_index>
   @section('content')
      <x-editor></x-editor>
      <h1 class="h3 text-gray mb-4"> Add Post </h1>
      <link rel="stylesheet" href="{!! asset('css/sb-admin-2.min.css') !!}">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-5">
               <form class="user" action="{!! route('checked') !!}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                     <label for=""> Add title </label>
                     <input type="text" class="form-control @error('MainTitle') is-invalid @enderror" name="MainTitle" value="{{ old('MainTitle') }}">
                        @error('MainTitle')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                        @enderror
                     </div>



                     <div class="form-group">
                        <label for="inputState"> Category </label>
                        <select name="categories_id" id="inputState" class="form-control">
                           @foreach ($category as $all_category)
                              <option value="{{ $all_category->id }}"> {{ $all_category->name  }}</option>
                           @endforeach
                        </select>
                     </div>
                     <br>



                     <div class="form-group">
                        <input type="file" name="post_image" class="@error('post_image') is-invalid @enderror" value="">
                           <small id="imageHelp" class="form-text text-muted"><span class="font-weight-bold text-dark">Note :</span> Choosing Photo is Must</small>
                           @error('post_image')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                        <input type="hidden" name="Status" value="Not Published">
                     </div>
                     <div class="col-lg-7">

                        
                        <div class="form-group">
                           <label for=""> Body </label>
                           <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="20" cols="180">{{ old('content') }}</textarea>
                              @error('content')
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                           </div>
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
