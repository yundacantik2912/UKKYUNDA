<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
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
        </style>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="logogf.jpg" alt="Logo">
                Website Galeri Foto
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
           
        </div>
    </nav> 

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>Daftar Akun Baru</h5>
                    </div>
                    <form action="config/aksi_register.php" method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="namalengkap" class="form-control" required>
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                        <div class="d-grid mt-2">
                        <button class="btn btn-primary" type="submit" name="kirim">DAFTAR</button>
                        </div>
                    </form>
                    <hr>
                    <div class="d-grid mt-2">
                   <a href="login.php" class="btn btn-success btn-user btn-block ml-auto">
    <i class="fa fa-laptop fa-fw"></i> Sudah Punya Akun? Login Disini
</a>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UKK RPL 2024 | Ayundari Farah Diba</p>
</footer>    

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>