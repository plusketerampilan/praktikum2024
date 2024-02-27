<?php
require_once 'koneksi.php';

// cek apakah ada pengiriman data dari formulir.php
if (isset($_POST['username'])) {
    $cari_username_query = "SELECT id, username, password FROM users WHERE username = '$_POST[username]'";
    $cari_username       = mysqli_query($koneksi_db, $cari_username_query);

    // Cek jumlah data yang didapat dari database
    if (mysqli_num_rows($cari_username) > 0) {
        // looping untuk ambil data
        foreach ($cari_username as $data_user) {
            // Pengujian data yang didapat dari database
            // echo "users_id = " . $data_user['id'] . '<br />';
            // echo "users_username = " . $data_user['username'] . '<br />';
            // echo "users_password = " . $data_user['password'] . '<br />';

            $password = $data_user['password'];
        }

        // silahkan sesuaikan proses pengecekan password disini
        if ($_POST['password'] === $password) {
            setcookie('login', true, time() + 3600);
            setcookie('nama', 'Nama Siswa', time() + 3600);
            header('Location: dashboard.php');
        } else {
            echo 'password salah';
        }
    } else {
        echo 'User tidak ditemukan';
    }
    // if ( $_POST['username'] === $username ) {
    //     // echo 'username benar';
    //     if ( $_POST['password'] === $password ) {
    //         // echo 'password benar';
    //         setcookie('login', true, time() + 3600);
    //         setcookie('nama', 'Nama Siswa', time() + 3600);
    //         header('Location: dashboard.php');
    //     } else {
    //         echo 'password salah';
    //     }
    // } else {
    //     echo 'username salah';
    // }
} else {
    header('Location: formulir.php');
}
