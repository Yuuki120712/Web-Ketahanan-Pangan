<?php

include 'includes/config.php';

if(
!isset($_SESSION['role'])
||
$_SESSION['role']!="admin"
){
die("Akses Ditolak");
}

$id=$_POST['id'];

$ikp=$_POST['ikp2026'];

mysqli_query(
$conn,
"UPDATE data_ikp
SET ikp_2026='$ikp'
WHERE id='$id'"
);

header("Location: content.php");

?>