<?php
if ( isset($_COOKIE['login']) ) {
    echo 'Selamat Datang ' . $_COOKIE['nama'] . '<br />';
    echo '<a href="logout.php">Logout</a>';
} else {
    echo 'Please login';
}