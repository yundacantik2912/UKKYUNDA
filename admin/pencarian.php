<?php
// Lakukan koneksi ke database atau include file konfigurasi koneksi

// Ambil nilai kata kunci pencarian
$keyword = $_GET['keyword'];

// Lakukan pencarian di database (gantilah dengan query sesuai dengan struktur database Anda)
$query = "SELECT * FROM foto WHERE judulfoto LIKE '%$keyword%'"; // Ubah sesuai dengan struktur tabel Anda

// Eksekusi query
$result = mysqli_query($index, $judulfoto);

// Tampilkan hasil pencarian
while ($data = mysqli_fetch_array($result)) {
    // Tampilkan foto atau informasi lainnya sesuai kebutuhan
    echo "<div>";
    echo "<img src='../assets/img/{$data['lokasifile']}' alt='{$data['judulfoto']}'>";
    echo "<h3>{$data['judulfoto']}</h3>";
    echo "</div>";
}

// Jika tidak ada hasil
if (mysqli_num_rows($result) == 0) {
    echo "Tidak ada hasil yang ditemukan.";
    
}
?>
