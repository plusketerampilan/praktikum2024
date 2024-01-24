<?php
/**
 * Berikah kondisi
 * Jika data 'username' ditemukan maka tampilkan
 * Jika data tidak ada maka tampilkan pesan 'Data Kosong'
 */
if ( isset($_POST['username']) ) {
    echo $_POST['username'];
    echo $_POST['password'];
} else {
    echo 'Dilarang dibuka langsung!';
}

/**
 * PERTANYAAN:
 * Tambahkan tombol untuk kembali
 * ke formulir sebelumnya
 */
?>
<a href="formulir.php">Kembali ke formulir</a>