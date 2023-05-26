<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Tambah Siswa</h1>

    <form method="POST" action="save.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas" required>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
