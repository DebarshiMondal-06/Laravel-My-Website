<header class="main_menu">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light">
               <a class="navbar-brand" href="{!! route('/') !!}"> <b style="font-style: italic; font-size: 1.5em">DΣBΛЯƧΉI</b> </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item active">
                        <a class="nav-link" href="{!! route('/') !!}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <ul class="list-unstyled text-center" style="margin-top: -12px;">
                              @foreach ($categories as $all_category)
                                 <li><a href="{!! route('single_category',$all_category->slug) !!}">{{ $all_category->name }}</a></li>
                              @endforeach
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">About Me</a>
                     </li>
                     @if (Auth::check())
                        <li class="nav-item">
                           <a class="nav-link" href="{!! route('admin_dashboard') !!}"> DashBoard </a>
                        </li>
                     @endif
                  </ul>
               </div>
               <div class="header_social_icon d-none d-lg-block">
                  <ul>
                     <style>
                     .d-none {
                        margin-top: 20px;
                        word-spacing: 5px;
                     }
                     </style>
                     <li><a href="#" class=""><i class="fab fa-facebook-square fa-2x"></i></a></li>
                     <li><a href="#"> <i class="fab fa-linkedin fa-2x"></i></a></li>
                     <li><a href="#"><b><i class="fab fa-instagram fa-2x"></i></b></a></li>
                     <li><a href="#"><i class="fab fa-skype fa-2x"></i></a></li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   </div>
</header>
