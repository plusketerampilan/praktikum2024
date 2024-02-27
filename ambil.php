<?php
/**
 * Coba ambil data dari Database MySQL
 */
require_once 'koneksi.php';

$query = "SELECT * FROM users";
$data  = mysqli_query($koneksi_db, $query);

if (mysqli_num_rows($data) > 0) {
    echo 'ada';
} else {
    echo 'kosong';
}