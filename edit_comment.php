<?php

include 'includes/config.php';

$id = $_GET['id'];

$data = mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT * FROM komentar_forum
WHERE id='$id'"
)
);

if(isset($_POST['update'])){

$komentar = $_POST['komentar'];

mysqli_query(
$conn,
"UPDATE komentar_forum
SET komentar='$komentar'
WHERE id='$id'"
);

header("Location: forum.php");

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Edit Komentar</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container py-5">

<div class="card p-4">

<h2>Edit Komentar</h2>

<form method="POST">

<textarea
name="komentar"
class="form-control mb-3"
rows="5"><?= $data['komentar']; ?></textarea>

<button
name="update"
class="btn btn-success">

Update

</button>

<a
href="forum.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</body>
</html>