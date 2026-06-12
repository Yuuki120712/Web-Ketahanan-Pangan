<?php

include 'includes/config.php';

$id = $_GET['id'];

mysqli_query(
$conn,
"DELETE FROM komentar_forum
WHERE id='$id'"
);

header("Location: forum.php");

?>