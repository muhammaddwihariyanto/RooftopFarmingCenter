<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rooftop Farming Center</title>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    /* Add your custom styles here */
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light p-2">
    <img class="logoRFC" src="asset/image/logorfc-fotor.png" alt="logorfc">
    <img class="logoTUS" src="asset/image/logoTUS.png" alt="logotus" style="width: 180px; height: auto; padding-left: 20px">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
          <a class="nav-link" href="#about">Tentang kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Projek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#mitra">Mitra</a>
        </li>
        <li class="nav-item">
          <a href="/dashboard"><button class="btn btn-primary">RFC-App</button></a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h1 class="display-4">Selamat Datang di Rooftop Farming Center</h1>
        <p class="lead">Transforming rooftops into sustainable green spaces</p>
    <div class="video-container">
        <video autoplay muted loop>
          <source src="asset/video/profil.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Tentang kami</h2>
          <p>Kami adalah sebuah pusat pertanian rooftop (rooftop farming center) yang berbasis Internet of Things (IoT). Kami percaya bahwa dengan menggabungkan inovasi pertanian perkotaan dan teknologi IoT, kita dapat mengatasi tantangan pangan dan lingkungan yang dihadapi oleh kota-kota modern.</p>
          <p>Dengan teknologi IoT yang terintegrasi dalam sistem pertanian rooftop kami, kami dapat secara otomatis memantau dan mengontrol aspek penting seperti irigasi, nutrisi, suhu, dan pencahayaan tanaman. Hal ini memungkinkan kami menciptakan kondisi pertumbuhan yang optimal, meningkatkan produktivitas, dan mengurangi penggunaan sumber daya secara efisien.</p>
          <p>Komitmen kami tidak hanya terbatas pada pertanian berkelanjutan, tetapi juga pada edukasi dan pelatihan masyarakat tentang manfaat pertanian perkotaan dan teknologi IoT. Dengan demikian, kami ingin meningkatkan kesadaran akan pentingnya memperkuat ketahanan pangan dan menjaga keseimbangan ekosistem di kota-kota masa depan. Bergabunglah dengan kami dalam mengubah cara kita memandang pertanian dan lingkungan perkotaan!</p>
        </div>
        <div class="col-md-6">
          <img src="asset/image/tentangkami.jpg" alt="About Us" class="img-fluid">
          <div class="slide-"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">PROJEK</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="asset/image/pohonanggur.jpg" alt="Service 1" class="card-img-top">
            <div class="card-body slide-right">
              <h5 class="card-title">BUDI DAYA TANAMAN ANGGUR</h5>
              <p class="card-text">Anggur ditanam pada Rooftop dengan menggunakan IOT. internet of thing ini diaplikasikan pada sebuah sistem yang membuat Rooftop dapat bekerja dengan otomatis dalam menyiram dan merawat tanaman</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="asset/image/goldenmelon.jpg" alt="Service 2" class="card-img-top">
            <div class="card-body slide-left">
              <h5 class="card-title">SMART GREEN HOUSE UNTUK BUDIDAYA TANAMAN MELON</h5>
              <p class="card-text">Melon ditanam pada smart green house dengan menggunakan IOT. Terdapat 3 Jenis melon yang saat ini dibudidayakan. Melon dengan jenis "Golden Melon" adalah jenis terbaik yang kami tanam hingga saat ini</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="asset/image/pohonjeruk.jpg" alt="Service 3" class="card-img-top">
            <div class="card-body slide-right">
              <h5 class="card-title">BUDIDAYA POHON JERUK & POHON PEPAYA</h5>
              <p class="card-text">Tanaman jeruk saat ini mulai dibudidayakan pada smart rooftop Kampus Telkom Surabaya. Tanaman pepaya juga merupakan tanaman yang sudah cukup lama dibudidayakan pada smart rooftop Kampus Telkom Surabaya.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="asset/image/pohonpisang.jpg" alt="Service 3" class="card-img-top">
            <div class="card-body slide-left">
              <h5 class="card-title">BUDIDAYA POHON PISANG & POHON MANGGA</h5>
              <p class="card-text">Pohon terakhir yang dapat kami tunjukan adalah pohon Pisang yang kami letakkan disamping "Smart pond", kolam ikan yang terotomasi dengan peralatan yang didukung oleh IOT. Lalu, dengan pohon mangga yang telah berbuah dalam beberapa waktu dekat ini.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- mitra section -->
  <section id="mitra" class="py-5">
    <div class="container">
      <h2>MITRA</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="video-container2">
              <video autoplay muted loop>
                <source src="asset/video/puspalebo.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
          </div>
            <div class="card-body">
              <h5 class="card-title">PUSPA LEBO</h5>
              <p class="card-text">UPT PENGEMBANGAN AGRIBISNIS TANAMAN PANGAN DAN HORTIKULTURA
                AGRO WISATA PUSPA LEBO</p>
                <p>CP: 081234951713</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="video-container2">
            <video autoplay muted loop>
              <source src="asset/video/DKPPSurabaya.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
            <div class="card-body">
              <h5 class="card-title">DKPP Surabaya</h5>
                <P class="card-text">Pagesangan II/56, Kec. Jambangan, Surabaya 60233</p>
                <p class="card-text">(031) 828 2328</p>
                <p class="card-text">dinaskppsby@surabaya.go.id</p>
                081 388 111 588</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="video-container2">
              <video autoplay muted loop>
                <source src="asset/video/DDurian.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              </div>
            <div class="card-body">
              <h5 class="card-title">D'Durian Park</h5>
              <P class="card-text">Jl. Cemorosewu, Segunung, Wonosalam, Kec. Wonosalam, Kabupaten Jombang, Jawa Timur 61476, Indonesia</p>
                <p class="card-text">0822-2941-9828</p>
                <p class="card-text">dedurian.park@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section -->
  <section id="contact" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Hubungi Kami</h2>
      <div class="row">
        <div class="col-md-6">
          <form>
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email">Your Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kunjungi Kami</h5>
              <p class="card-text">Jl. Ketintang no.156<br>Surabaya, 60231<br>Jawa Timur, Indonesia</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-3 text-center">
    <p>&copy; 2023 Rooftop Farming Center. All rights reserved.</p>
  </footer>

  <!-- JS Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
