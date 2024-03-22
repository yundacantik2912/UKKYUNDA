<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Bootstrap Icons -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
            <a href="../config/index.php" class="btn btn-outline-danger m-1"><i class="fa-solid fa-right-from-bracket"></i>Keluar</a>
           
        </div>
    </nav> 

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>Selamat Datang di Website Galeri Foto!</h5>
                    </div>
                    <form action="config/aksi_login.php" method="POST">
    <label class="form-label">Username</label>
    <input type="text" name="username" class="form-control mb-2" required>
    
    <label class="form-label">Password</label>
    <div class="input-group mb-2">
        <input id="password-input" type="password" name="password" class="form-control" required>
        <button id="toggle-password" type="button" class="btn btn-outline-secondary"><i class="fa fa-eye"></i></button>
    </div>
    
    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit" name="kirim">MASUK</button>
    </div>
</form>

                    <hr>
                    <div class="d-grid mt-2">
                   <a href="register.php" class="btn btn-success btn-user btn-block ml-auto">
    <i class="fa fa-laptop fa-fw"></i> Belum Punya Akun? Silahkan Daftar
</a>

                </div>
            </div>
        </div>
    </div>
</div>



<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UKK RPL 2024 | Ayundari Farah Diba</p>
</footer>    

<script>
    document.getElementById("toggle-password").onclick = function() {
        var passwordInput = document.getElementById("password-input");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            document.getElementById("toggle-password").innerHTML = '<i class="fa fa-eye-slash"></i>';
        } else {
            passwordInput.type = "password";
            document.getElementById("toggle-password").innerHTML = '<i class="fa fa-eye"></i>';
        }
    }
</script>
</script>
</body>
</html>