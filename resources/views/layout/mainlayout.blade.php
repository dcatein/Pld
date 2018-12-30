<!DOCTYPE html>

<html lang="en">

   <head>
     <link href="/css/app.css" rel="stylesheet">
     <link href="<?php echo asset('css/padrao.css')?>" type="text/css" rel="stylesheet">
     @include('layout.partials.head')

   </head>

   <body>
    <div class='container'>
      @include('layout.partials.nav')

      @include('layout.partials.header')

      @yield('content')

      @include('layout.partials.footer')

    </div>
   </body>

</html>