<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "ketahanan_pangan"
);

if(!$conn){
    die("Koneksi gagal");
}

?>