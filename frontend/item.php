<?php
// Array item
$items = array(
    array('id' => 1, 'nama' => 'Item 1', 'gambar' => 'item1.jpg', 'deskripsi' => 'Deskripsi item 1'),
    array('id' => 2, 'nama' => 'Item 2', 'gambar' => 'item2.jpg', 'deskripsi' => 'Deskripsi item 2'),
    array('id' => 3, 'nama' => 'Item 3', 'gambar' => 'item3.jpg', 'deskripsi' => 'Deskripsi item 3'),
);

// Tampilkan item
foreach ($items as $item) {
    echo '<a href="deskripsi.php?id=' . $item['id'] . '">';
    echo '<img src="gambar/' . $item['gambar'] . '" alt="' . $item['nama'] . '">';
    echo '</a>';
}
?>