<?php
// Koneksi ke database
$conn = mysqli_connect('localhost:3306', 'root', 'alba', 'siswa');

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

// Query untuk mengupdate data siswa
$sql = "UPDATE siswa SET nama = '$nama', kelas = '$kelas' WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "Data siswa berhasil diupdate.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
