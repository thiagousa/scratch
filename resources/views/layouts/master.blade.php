  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title> LaraveL Blog - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('/css/blog.css') }}" rel="stylesheet">


    <script src="{{ URL::asset('/js/ie-emulation-modes-warning.js') }}"></script>


    <link href="{{ URL::asset('/css/ie10-viewport-bug-workaround.css') }}"  rel="stylesheet">



  </head>
  <body>
    @include('layouts.nav')

        <div class="container">

            <div class="blog-header">
                <h1 class="blog-title">The Laravel Blog</h1>
                <p class="lead blog-description">This just exemplo of Laravel Power.</p>
              </div>
              <div class="row">
                  <div class="col-sm-8 blog-main">
            @yield('content')

            
            </div><!-- /.blog-main -->
                  

                    @include('layouts.sidebar')
                  
         
    </div><!-- /.container -->

    @include('layouts.footer')










