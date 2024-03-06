<?php
/**
 * Coba ambil data dari Database MySQL
 */
require_once 'koneksi.php';

$username = 'mario'; // TUGAS: ambil data dari formulir.php
$query = "SELECT * FROM `users` WHERE `username` = '$username'";
$data  = mysqli_query($koneksi_db, $query);

/**
 * Cek apakah $data hasil query ada isinya
 */
if (mysqli_num_rows($data) > 0) {
    /**
     * extract data per line
     */
    foreach ($data as $user) {
        echo $user['nama'] . '<br />';
    }
} else {
    echo 'kosong';
}