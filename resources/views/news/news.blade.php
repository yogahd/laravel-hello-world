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
            <img style="height:250px" class="card-img-top" src="https://selular.id/wp-content/uploads/2021/12/smartphone-terjangkau.webp" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Ini Raja HP di Dunia Menurut IDC, Apakah Xiaomi, Oppo atau Vivo?</h4>
                <p class="card-text">Berikut raja hp di dunia menurut Perusahaan Data Internasional (IDC).
                    Apakah Xiaomi, Oppo atau Vivo yang menjadi raja hp di dunia? Simak artikel ini.</p>
                <a href="https://selular.id/2022/02/ini-raja-hp-di-dunia-menurut-idc-apakah-xiaomi-oppo-atau-vivo/" class="btn btn-primary">Lanjut Baca ...</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card" style="width:300px">
            <img style="height:250px" class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">10 Tips Membeli iPhone Bekas, Cek Supaya Kalian Tidak Tertipu</h4>
                <p class="card-text">Simak 10 tips membeli iPhone bekas, supaya kalian tidak tertipu.
                    Tidak tertipu dalam membeli iPhone bekas dalam hal ini, supaya kalian mendapat barang yang masih mulus.</p>
                <a href="https://selular.id/2022/02/10-tips-membeli-iphone-bekas-cek-supaya-kalian-tidak-tertipu/" class="btn btn-primary">Lanjut Baca ...</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card" style="width:300px">
            <img style="height:250px" class="card-img-top" src="https://selular.id/wp-content/uploads/2022/02/xiaomi-12-ultra-696x391.jpeg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Xiaomi 12 Ultra Bakal Dimotori Chipset Snapdragon 8 Gen 1 Plus</h4>
                <p class="card-text">Setelah kehadirannya telah dipastikan, berbagai bocoran mengenai Xiaomi 12 Ultra mulai beredar. Salah satunya adalah chipset apa yang nantinya akan digunakan di dapur pacu Xiaomi 12 Ultra.
                    Bocoran terbaru menyebutkan, Xiaomi 12 Ultra akan ditenagai chipset baru Qualcomm Snapdragon 8 Gen 1 Plus yang akan datang.</p>
                <a href="https://selular.id/2022/02/xiaomi-12-ultra-bakal-dimotori-chipset-snapdragon-8-gen-1-plus/" class="btn btn-primary">Lanjut Baca ...</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card" style="width:300px">
            <img style="height:250px" class="card-img-top" src="https://selular.id/wp-content/uploads/2021/04/Realme-C25-696x464.jpg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Realme C25 Dapat Update Realme UI 3.0 BETA berbasis Android 12</h4>
                <p class="card-text">Realme C25 yang diumumkan Maret lalu dengan Realme UI 2.0 berbasis Android 11 menerima pembaruan Realme UI 3.0 BETA berbasis Android 12.
                    Bagi Pengguna seri realme C25 dan tertarik untuk mencoba Realme UI 3.0, bisa melakukan update tersebut dengan buka menu Pengaturan.</p>
                <a href="https://selular.id/2022/02/realme-c25-dapat-update-realme-ui-3-0-beta-berbasis-android-12/" class="btn btn-primary">Lanjut Baca ...</a>
            </div>
        </div>
    </div>

  </div>

</body>
</html>