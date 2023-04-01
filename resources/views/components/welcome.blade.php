<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RentalCar</title>

 <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">RentalCar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">RentalCar</h1>
      <p class="lead">The best car rental service in town.</p>
      <a href="#" class="btn btn-primary btn-lg">Learn More</a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2>Car Models</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet bibendum magna eget elementum. Morbi faucibus, magna et aliquet porttitor, magna nibh blandit turpis, sit amet eleifend purus velit id velit. </p>
        <a href="./model" class="btn btn-secondary">View Models</a>
      </div>
      <div class="col-md-4">
        <h2>Booking</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet bibendum magna eget elementum. Morbi faucibus, magna et aliquet porttitor, magna nibh blandit turpis, sit amet eleifend purus velit id velit. </p>
        <a href="#" class="btn btn-secondary">Book Now</a>
      </div>
      <div class="col-md-4">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet bibendum magna eget elementum. Morbi faucibus, magna et aliquet porttitor, magna nibh blandit turpis, sit amet eleifend purus velit id velit. </p>
        <a href="#" class="btn btn-secondary">Contact Us</a>
</div>
</div>
  </div>
  <!-- Footer -->
  <footer class="bg-dark text-white mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; RentalCar 2023</p>
        </div>
        <div class="col-md-6">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms</a>
            </li>
            <li class="list-inline-item">
              <a href="#">FAQ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap JS -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>