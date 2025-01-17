<?php
// Array item
$items = array(
    array('id' => 1, 'nama' => 'Item 1', 'gambar' => 'item1.jpg', 'deskripsi' => 'Deskripsi item 1'),
    array('id' => 2, 'nama' => 'Item 2', 'gambar' => 'item2.jpg', 'deskripsi' => 'Deskripsi item 2'),
    array('id' => 3, 'nama' => 'Item 3', 'gambar' => 'item3.jpg', 'deskripsi' => 'Deskripsi item 3'),
);

// Ambil id item dari URL
$id_item = $_GET['id'];

// Tampilkan form pembelian
foreach ($items as $item) {
    if ($item['id'] == $id_item) {
        echo '<h1>' . $item['nama'] . '</h1>';
        echo '<form action="proses_pembelian.php" method="post">';
        echo '<input type="hidden" name="id_item" value="' . $item['id'] . '">';
        echo '<label>Nama:</label>';
        echo '<input type="text" name="nama">';
        echo '<br>';
        echo '<label>Alamat:</label>';
        echo '<input type="text" name="alamat">';
        echo '<br>';
        echo '<input type="submit" value="Beli Sekarang">';
        echo '</form>';
    }
}
?>