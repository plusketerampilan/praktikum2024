<?php
/**
 * Metode logout untuk Cookie
 */
setcookie('login', false, time() - 3600);
header('Location: formulir.php');
