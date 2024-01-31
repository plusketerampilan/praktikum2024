<?php
$username = 'siswa';
$password = '12345';

if ( isset($_POST['username']) ) {
    if ( $_POST['username'] === $username ) {
        // echo 'username benar';
        if ( $_POST['password'] === $password ) {
            // echo 'password benar';
            setcookie('login', true, time() + 3600);
            setcookie('nama', 'Nama Siswa', time() + 3600);
            header('Location: dashboard.php');
        } else {
            echo 'password salah';
        }
    } else {
        echo 'username salah';
    }
} else {
    header('Location: formulir.php');
}
