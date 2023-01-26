
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Booststrap CSS -->
    @include('includes.style')

    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Welcome, Killer Shop</title>
  </head>
  <body>
    <!-- Header -->
    @include('includes.navbar')
    <!-- Close Header -->

    <br><br><br>

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <img src="Frontend/img/snippers(1).png">
            <h1> <b> Let's try a new experience with a  New Weapon </b> </h1> 
          </div>
        </div>
      </div>
    </section>
    <!-- Close Hero Section -->

    <br><br><br>

    <!-- Trend Categories -->
   @yield('content')
    <!-- Close Testimonial -->

    <!-- Footer -->
   @include('includes.footer')
    <!-- Close Footer -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    @include('includes.script')
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->


  </body>
</html>