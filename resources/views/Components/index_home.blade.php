<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title> BLOG || HOME</title>
   <link rel="icon" href="{!! asset('public/img/pencil.png') !!}">
   <link rel="stylesheet" href="css/theme/animate.css">
   <!-- themify CSS -->
   <link rel="stylesheet" href="{!! asset('css/themify-icons.css') !!}">
   <link rel="stylesheet" href="{!! asset('css/theme/style.css') !!}">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link href="{!! asset('css/sb-admin-2.min.css') !!}" rel="stylesheet">
   <link
   rel="stylesheet"
   href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
   />
</head>

<body>
   <!--::header part start::-->
   <style media="screen">
   .animate__animated.animate__bounceInUp {
      --animate-duration: 1.8s;
   }
   </style>


   @yield('section')



   <!-- jquery plugins here-->
   <!-- jquery -->
   <script src="{!! asset('js/themejs/jquery-1.12.1.min.js') !!}"></script>
   <script src="{!! asset('js/themejs/custom.js') !!}"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
