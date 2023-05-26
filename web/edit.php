<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Edit Siswa</h1>

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

        // Query untuk mengambil data siswa berdasarkan ID
        $sql = "SELECT * FROM siswa WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        // Tampilkan form edit
        echo "<form method='POST' action='update.php'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<label for='nama'>Nama:</label>";
        echo "<input type='text' name='nama' id='nama' value='" . $row['nama'] . "' required>";
        echo "<label for='kelas'>Kelas:</label>";
        echo "<input type='text' name='kelas' id='kelas' value='" . $row['kelas'] . "' required>";
        echo "<input type='submit' value='Simpan'>";
        echo "</form>";
    }

    // Tutup koneksi
    mysqli_close($conn);
    ?>
</body>
</html>
