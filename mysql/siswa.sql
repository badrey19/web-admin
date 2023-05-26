-- Membuat database
CREATE DATABASE siswa;

-- Menggunakan database
USE siswa;

-- Membuat tabel siswa
CREATE TABLE siswa (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(50) NOT NULL,
  kelas VARCHAR(20) NOT NULL
);

-- Menambahkan beberapa data awal

