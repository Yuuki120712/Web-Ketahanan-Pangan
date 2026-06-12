<?php

include 'includes/config.php';

$user_id = $_SESSION['user_id'];

$komentar = $_POST['komentar'];

mysqli_query(
$conn,
"INSERT INTO komentar_forum
(user_id,komentar)
VALUES
('$user_id','$komentar')"
);

header("Location: forum.php");

?>