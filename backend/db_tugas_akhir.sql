-- Buat database
CREATE DATABASE db_tugas_akhir;

-- Gunakan database
USE db_tugas_akhir;

-- Buat tabel item
CREATE TABLE item (
  id_item INT AUTO_INCREMENT,
  nama VARCHAR(255) NOT NULL,
  gambar VARCHAR(255) NOT NULL,
  deskripsi TEXT NOT NULL,
  PRIMARY KEY (id_item)
);

-- Buat tabel transaksi
CREATE TABLE transaksi (
  id_transaksi INT AUTO_INCREMENT,
  id_item INT NOT NULL,
  nama_pembeli VARCHAR(255) NOT NULL,
  alamat_pembeli TEXT NOT NULL,
  tanggal_transaksi DATE NOT NULL,
  PRIMARY KEY (id_transaksi),
  FOREIGN KEY (id_item) REFERENCES item(id_item)
);

-- Tambahkan data contoh ke tabel item
INSERT INTO item (nama, gambar, deskripsi)
VALUES
  ('Item 1', 'item1.jpg', 'Deskripsi item 1'),
  ('Item 2', 'item2.jpg', 'Deskripsi item 2'),
  ('Item 3', 'item3.jpg', 'Deskripsi item 3');

-- Tambahkan data contoh ke tabel transaksi
INSERT INTO transaksi (id_item, nama_pembeli, alamat_pembeli, tanggal_transaksi)
VALUES
  (1, 'John Doe', 'Jalan Raya No. 1', '2022-01-01'),
  (2, 'Jane Doe', 'Jalan Raya No. 2', '2022-01-15'),
  (3, 'Bob Smith', 'Jalan Raya No. 3', '2022-02-01');