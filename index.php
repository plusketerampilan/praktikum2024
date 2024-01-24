<?php
$nama        = 'Ahmad';
$kelas       = 'XI A';
$tahun_lahir = 2007;
?>

<h1>Siswa XI A</h1>
<!-- table>(tr>th*3)(tr>td*3) -->
<table>
    <tr>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Usia</th>
    </tr>
    <tr>
        <td><?= $nama ?></td>
        <td><?= $kelas ?></td>
        <td><?= date("Y") - $tahun_lahir ?></td>
    </tr>
</table>

<style>
table, th, td {
    border: 1px solid black;
}
</style>
