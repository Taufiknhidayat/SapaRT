CREATE DATABASE db-aduan;
USE db-aduan;

-- TABEL ADMIN
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);

INSERT INTO users (username, password)
VALUES ('admin', MD5('admin123'));

-- TABEL ADUAN
CREATE TABLE aduan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    email VARCHAR(100),
    isi_aduan TEXT,
    status ENUM('Masuk','Diproses','Selesai') DEFAULT 'Masuk',
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
