<?php
// Array item
$items = array(
    array('id' => 1, 'nama' => 'Item 1', 'gambar' => 'item1.jpg', 'deskripsi' => 'Deskripsi item 1'),
    array('id' => 2, 'nama' => 'Item 2', 'gambar' => 'item2.jpg', 'deskripsi' => 'Deskripsi item 2'),
    array('id' => 3, 'nama' => 'Item 3', 'gambar' => 'item3.jpg', 'deskripsi' => 'Deskripsi item 3'),
);

// Ambil id item dari URL
$id_item = $_GET['id'];

// Tampilkan deskripsi item
foreach ($items as $item) {
    if ($item['id'] == $id_item) {
        echo '<h1>' . $item['nama'] . '</h1>';
        echo '<img src="gambar/' . $item['gambar'] . '" alt="' . $item['nama'] . '">';
        echo '<p>' . $item['deskripsi'] . '</p>';
        echo '<a href="pembelian.php?id=' . $item['id'] . '">Beli Sekarang</a>';
    }
}
?>