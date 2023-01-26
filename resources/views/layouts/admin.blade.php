<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>
    

        @include('includes.admin.style')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        @include('includes.admin.sidebar')

        <!-- top navigation -->
        @include('includes.admin.navbar')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('includes.admin.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
        @include('includes.admin.script')
  </body>
</html>
