<!DOCTYPE html>
<html lang="en">
<head>
  <title>Praktikum 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">DuniaPhone</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Home</a>
    </li>

      <li class="nav-item">
        <a class="nav-link" href="/products">Products</a>
      </li>
    
    <!-- <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Products</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li> -->
    
    <li class="nav-item">
        <a class="nav-link" href="/news">News</a>
    </li>
    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Program</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/program/karir">Karir</a>
        <a class="dropdown-item" href="/program/magang">Magang</a>
      </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/about">About Us</a>
    </li>
    
</ul>
</nav>
<br>
  
<div class="row">
    
    <div class="col-md-3">
        <div class="card" style="width:300px">
            <img style="height:250px" class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Samsung S21</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card" style="width:300px">
            <img style="height:250px" class="card-img-top" src="https://www.begawei.com/wp-content/uploads/2021/02/Xiaomi-Mi-11-Ultra.png" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Xiaomi Mi 11 Ultra</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card" style="width:300px">
            <img style="height:250px" class="card-img-top" src="https://img.okezone.com/content/2022/02/11/57/2545864/huawei-p50-pro-rilis-di-indonesia-dilengkapi-kamera-64mp-berapa-harganya-ZVSjyxRcIR.jpg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Huawei P50 Pro</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card" style="width:300px">
            <img style="height:250px" class="card-img-top" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/10/06/13277203.jpg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Oppo Find X3 Pro</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
    </div>

  </div>

</body>
</html>