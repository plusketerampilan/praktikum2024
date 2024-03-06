<?php
/**
 * Coba ambil data dari Database MySQL
 */
require_once 'koneksi.php';

$username = $_POST['username'];
$query    = "SELECT * FROM `users` WHERE `username` = '$username'";
$data     = mysqli_query($koneksi_db, $query);

if (mysqli_num_rows($data) > 0) {
    foreach ($data as $user) {
        echo $user['nama'] . '<br />';
    }
} else {
    echo 'kosong';
}