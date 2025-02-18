<?php
$koneksi = mysqli_connect("localhost","root","","kasir_alfan");

// Check connection
if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}

?>