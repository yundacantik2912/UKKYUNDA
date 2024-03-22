<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WEBSITE GALERI FOTO</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <style>
           body {
                background-color: #FFC0CB; /* Ganti dengan kode warna yang diinginkan */
            }
            .navbar-brand img {
              width: 60px; /* Atur lebar gambar logo */
            height: 60px; /* Atur tinggi gambar logo */
            border-radius: 50%; /* Bulatkan logo */
            }
             /* Atur background color navbar */
            .navbar {
            background-color:#DCD0FF; /* Ganti dengan warna yang diinginkan */
             }
            /* Atur warna teks pada navbar */
            .navbar-nav .nav-link {
                color: white; /* Ganti dengan warna teks yang sesuai */
            }   
            .hero {
        height: 100vh; /* Mengatur tinggi sesuai tinggi layar */
    }

    .hero-text {
        margin-bottom: 30px; /* Memberikan jarak bawah antara teks dan gambar */
    }

    .hero-image img {
        max-width: 100%; /* Memastikan gambar tidak melebihi lebar container */
        height: auto; /* Mengikuti perubahan lebar */
    }     
        </style>
        

</head>
<body>
  <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="logogf.jpg" alt="Logo">
                Website Galeri Foto
            </a>
            <div class="ml-auto">
                <a href="register.php" class="btn btn-outline-primary m-1"><i class="fas fa-user-plus"></i> Daftar</a> <!-- Tambahkan ikon Daftar -->
                <a href="login.php" class="btn btn-outline-success m-1"><i class="fas fa-sign-in-alt"></i> Masuk</a> <!-- Tambahkan ikon Masuk -->
            </div>
        </div>
    </nav>

     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                <div class="hero-text text-center">
                    <h1 class="text-white" data-aos="fade-up">Selamat Datang di Website Galeri Foto</h1>
                    <p class="text-white" data-aos="fade-up">Silahkan <a href="login.php">login</a> untuk melanjutkan.</p>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="hero-image" data-aos="fade-up" data-aos-delay="300">
                    <img src="galeri.jpg" class="img-fluid" alt="working girl">
                </div>
            </div>
        </div>
    </div>
</section>



<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UKK RPL 2024 | Ayundari Farah Diba</p>
</footer>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>