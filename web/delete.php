<?php
// Koneksi ke database
$conn = mysqli_connect('localhost:3306', 'root', 'alba', 'siswa');

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah parameter ID telah diberikan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data siswa berdasarkan ID
    $sql = "DELETE FROM siswa WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Data siswa berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi
mysqli_close($conn);
?>
