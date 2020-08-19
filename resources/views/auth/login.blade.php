@extends('layouts.app')

@section('content')
   <link rel="stylesheet" href="{!! asset('css/sb-admin-2.min.css') !!}">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-8 col-lg-10 col-md-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
               <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                     <div class="col-lg-2"></div>
                     <div class="col-lg-8">
                        <div class="p-5">
                           <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                           </div>
                           <form class="user" method="POST" action="{{ route('login') }}">
                              @csrf
                              <div class="form-group">
                                 <input type="email" id="exampleInputEmail" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email">
                                    @error('email')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>
                                 <div class="form-group">
                                    <input type="password" id="exampleInputPassword" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Password">
                                       @error('password')
                                          <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                          </span>
                                       @enderror
                                    </div>
                                    <div class="form-group">
                                       <div class="custom-control custom-checkbox small">
                                          <input class="custom-control-input" type="checkbox" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="customCheck">Remember Me</label>
                                       </div>
                                    </div>

                                    <button type="submit" id="color" class="btn btn-dark btn-user btn-block shadow" style="
                                    background: linear-gradient(to right, #f5af19, #f12711);
                                    ">
                                    <span class="text-white" style="font-size: 1.4em;"> Login Here </span>
                                 </button>
                                 <hr>
                              </form>
                              {{-- @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                           </a>
                        @endif --}}
                        <div class="text-center mt-4">
                           <a class="small" href="{!! route('register') !!}">Create an Account!</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
