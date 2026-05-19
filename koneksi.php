<?php

$koneksi = mysqli_connect('localhost','root','','db_data_alumni');
if (!$koneksi) {
    // menutup dan menampilkan erorr
    die("koneksi gagal: ") . mysqli_connect_errno();
}
?>