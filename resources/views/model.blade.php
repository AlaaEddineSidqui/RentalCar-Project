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
      <a class="navbar-brand" href="./dashboard">RentalCar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./dashboard">Home</a>
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
    </div>
  </div>


<div class="card">
  <img class="card-img-top" src="{{asset('https://th.bing.com/th/id/R.cf529c43cad236f69d10b40de77871f8?rik=WC5Be4AnRYnN3A&pid=ImgRaw&r=0')}}" width="170" height="500" alt="Car Image">
  <div class="card-body">
    <h5 class="card-title">2019 Toyota Camry</h5>
    <p class="card-text">The 2019 Toyota Camry is a reliable and comfortable midsize sedan that's perfect for road trips and daily commutes.</p>
    <ul class="list-group">
      <li class="list-group-item">4-door sedan</li>
      <li class="list-group-item">5 passengers</li>
      <li class="list-group-item">Automatic transmission</li>
      <li class="list-group-item">Hybrid</li>
    </ul>
    <a href="#" class="btn btn-primary">Rent Now</a>
  </div>
</div>


<div class="card">
  <img class="card-img-top" src="{{asset('https://th.bing.com/th/id/OIP.YkDwD5aj_lXgM2hPHRWZjwHaE4?pid=ImgDet&rs=1')}}" width="170" height="500" alt="Car Image">
  <div class="card-body">
    <h5 class="card-title">2022 Clio 4</h5>
    <p class="card-text">The 2022 Clio 4 is a reliable and comfortable midsize sedan that's perfect for road trips and daily commutes.</p>
    <ul class="list-group">
      <li class="list-group-item">4-door sedan</li>
      <li class="list-group-item">5 passengers</li>
      <li class="list-group-item">Manual transmission</li>
      <li class="list-group-item">Gasoil</li>
    </ul>
    <a href="#" class="btn btn-primary">Rent Now</a>
  </div>
</div>



<div class="card">
  <img class="card-img-top" src="{{asset('https://www.wandaloo.com/files/2019/02/Citroen-Berlingo-2019-Neuve-Maroc.jpg')}}" width="170" height="500" alt="Car Image">
  <div class="card-body">
    <h5 class="card-title">2022 Citroen Berlingo</h5>
    <p class="card-text">The Citroen Berlingo is a reliable and comfortable midsize sedan that's perfect for road trips and daily commutes.</p>
    <ul class="list-group">
      <li class="list-group-item">6-door sedan</li>
      <li class="list-group-item">5 passengers</li>
      <li class="list-group-item">Automatic transmission</li>
      <li class="list-group-item">Essence</li>
    </ul>
    <a href="#" class="btn btn-primary">Rent Now</a>
  </div>
</div>


<div class="card">
  <img class="card-img-top" src="{{asset('https://th.bing.com/th/id/OIP.F1VfoS_okHhY7gaUVYvAIwHaEK?pid=ImgDet&rs=1')}}" width="170" height="500" alt="Car Image">
  <div class="card-body">
    <h5 class="card-title">2022 Peugeot 208</h5>
    <p class="card-text">The Peugeot 208 is a reliable and comfortable midsize sedan that's perfect for road trips and daily commutes.</p>
    <ul class="list-group">
      <li class="list-group-item">5-door sedan</li>
      <li class="list-group-item">4 passengers</li>
      <li class="list-group-item">Automatic transmission</li>
      <li class="list-group-item">Hybrid</li>
    </ul>
    <a href="#" class="btn btn-primary">Rent Now</a>
  </div>
</div>



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