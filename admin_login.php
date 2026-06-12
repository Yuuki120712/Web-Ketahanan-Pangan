<?php
include 'includes/config.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(
        $username=="admin" &&
        $password=="admin123"
    ){

        $_SESSION['role'] = "admin";
        $_SESSION['nama'] = "Administrator";

        header("Location: content.php");
        exit;

    }else{

        echo "
        <script>
        alert('Login Admin Gagal');
        </script>
        ";

    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#F4F1E6;">

<div class="container py-5">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow p-4">

<h2 class="text-center mb-4">
Login Administrator
</h2>

<form method="POST">

<input
type="text"
name="username"
class="form-control mb-3"
placeholder="Username Admin"
required>

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Password Admin"
required>

<button
name="login"
class="btn btn-success w-100">

Login Admin

</button>

</form>

</div>

</div>

</div>

</div>

</body>
</html>