<?php
// Koneksi ke database
$conn = mysqli_connect('localhost:3306', 'root', 'alba', 'siswa');

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

// Query untuk menyimpan data siswa
$sql = "INSERT INTO siswa (nama, kelas) VALUES ('$nama', '$kelas')";
if (mysqli_query($conn, $sql)) {
    echo "Data siswa berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
