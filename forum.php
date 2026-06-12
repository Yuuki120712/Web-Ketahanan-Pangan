<?php
include 'includes/config.php';
$totalProvinsi =
mysqli_num_rows(
mysqli_query(
$conn,
"SELECT * FROM data_ikp"
)
);

$totalKomentar =
mysqli_num_rows(
mysqli_query(
$conn,
"SELECT * FROM komentar_forum"
)
);

$rata =
mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT AVG(ikp_2026)
AS rata
FROM data_ikp"
)
);

/* ==========================
   AUTH GUARD
========================== */

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Forum Diskusi</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    /* =========================
   IMPORT FONT
========================= */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

/* =========================
   ROOT COLOR
========================= */
:root{
    --primary:#4A5F2A;
    --secondary:#708238;
    --lightgreen:#DCE7BE;
    --cream:#F4F1E6;
    --white:#FFFFFF;
}

/* =========================
   GLOBAL
========================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:var(--cream);
    font-family:'Poppins',sans-serif;
    overflow-x:hidden;
}

a{
    text-decoration:none;
}

.section-title{
    color:var(--primary);
    font-size:2.2rem;
    font-weight:700;
    margin-bottom:30px;
}

/* =========================
   NAVBAR
========================= */

.custom-navbar{
    background:var(--lightgreen);
    box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.navbar-brand{
    color:var(--primary)!important;
    font-weight:800;
    font-size:1.4rem;
}

.nav-link{
    color:#333 !important;
    font-weight:500;
    margin-left:10px;
    transition:.3s;
}

.nav-link:hover{
    color:var(--primary)!important;
}

.nav-link.active{
    color:var(--primary)!important;
    font-weight:700;
}

/* =========================
   HERO SECTION
========================= */

.hero{
    height:100vh;

    background:
    linear-gradient(
        rgba(0,0,0,.45),
        rgba(0,0,0,.45)
    ),
    url('../images/hero.jpg');

    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;

    text-align:center;
}

.hero-content{
    max-width:900px;
    color:white;
}

.hero-content h1{
    font-size:4rem;
    font-weight:800;
    margin-bottom:20px;
}

.hero-content p{
    font-size:1.2rem;
    margin-bottom:25px;
}

.btn-green{
    background:var(--lightgreen);
    color:var(--primary);
    border:none;
    font-weight:700;
    padding:14px 35px;
    border-radius:50px;
    transition:.3s;
}

.btn-green:hover{
    background:white;
    color:var(--primary);
}

/* =========================
   CARD
========================= */

.card{
    border:none;
    border-radius:25px;
    background:white;

    box-shadow:
    0 5px 15px rgba(0,0,0,.08);

    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card h4{
    color:var(--primary);
    font-weight:700;
}

/* =========================
   TABLE
========================= */

.table{
    background:white;
    border-radius:15px;
    overflow:hidden;
}

.table thead{
    background:var(--primary);
    color:white;
}

.table tbody tr:hover{
    background:#f8f8f8;
}

/* =========================
   SEARCH
========================= */

#searchInput{
    border-radius:30px;
    padding:12px 20px;
    border:2px solid var(--lightgreen);
}

#historyBox{
    border-radius:15px;
    overflow:hidden;
}

.history-item{
    cursor:pointer;
}

/* =========================
   FORUM
========================= */

.comment-box{
    background:white;
    padding:20px;
    border-radius:20px;
    margin-bottom:20px;

    box-shadow:
    0 4px 10px rgba(0,0,0,.08);
}

.comment-user{
    color:var(--primary);
    font-weight:700;
}

/* =========================
   TEAM
========================= */

.team-card{
    text-align:center;
    padding:25px;
}

.team-card img{
    width:180px;
    height:180px;
    object-fit:cover;
    border-radius:50%;
    border:5px solid var(--lightgreen);

    margin-bottom:15px;
}

.team-card h4{
    color:var(--primary);
}

.team-card i{
    color:var(--primary);
    font-size:22px;
    transition:.3s;
}

.team-card i:hover{
    color:var(--secondary);
}

/* =========================
   ACCORDION
========================= */

.accordion-button{
    background:var(--lightgreen);
    color:var(--primary);
    font-weight:600;
}

.accordion-button:not(.collapsed){
    background:var(--primary);
    color:white;
}

/* =========================
   DASHBOARD
========================= */

.stat-card{
    background:white;
    border-radius:25px;
    padding:25px;
    text-align:center;

    box-shadow:
    0 5px 15px rgba(0,0,0,.08);
}

.stat-card h2{
    color:var(--primary);
    font-size:2.5rem;
    font-weight:800;
}

/* =========================
   FOOTER
========================= */

footer{
    background:var(--primary);
    color:white;
    padding:60px 0;
    margin-top:80px;
}

footer h4{
    margin-bottom:15px;
}

footer a{
    color:white;
}

footer a:hover{
    color:var(--lightgreen);
}

/* =========================
   MOBILE
========================= */

@media(max-width:768px){

.hero-content h1{
    font-size:2.2rem;
}

.hero-content p{
    font-size:1rem;
}

.section-title{
    font-size:1.7rem;
}

.team-card img{
    width:140px;
    height:140px;
}

}
</style>

</head>

<body>

<?php include 'includes/navbar.php'; ?>
<?php

if(
isset($_SESSION['role'])
&&
$_SESSION['role']=="admin"
){

$totalUser =
mysqli_num_rows(
mysqli_query(
$conn,
"SELECT * FROM users"
)
);

$totalKomentar =
mysqli_num_rows(
mysqli_query(
$conn,
"SELECT * FROM komentar_forum"
)
);

?>

<div class="container mt-4">

<div class="alert alert-success">

<h4>
Login sebagai Administrator
</h4>

<p>
Selamat datang,
<?= $_SESSION['nama']; ?>
</p>

</div>

<div class="row">

<div class="col-md-6">

<div class="card p-4 text-center">

<h2>
<?= $totalUser ?>
</h2>

<p>Total User</p>

</div>

</div>

<div class="col-md-6">

<div class="card p-4 text-center">

<h2>
<?= $totalKomentar ?>
</h2>

<p>Total Komentar</p>

</div>

</div>

</div>

</div>

<?php } ?>
<div class="container py-5">

<h1 class="section-title text-center">
Forum Diskusi Ketahanan Pangan
</h1>

<!-- DASHBOARD -->

<div class="row mb-5">

<div class="col-md-4">

<div class="card p-4 text-center">

<h2>
<?= $totalProvinsi ?>
</h2>

<p>Total Provinsi</p>

</div>

</div>

<div class="col-md-4">

<div class="card p-4 text-center">

<h2>
<?= round($rata['rata'],2) ?>
</h2>

<p>Rata-rata IKP</p>

</div>

</div>

<div class="col-md-4">

<div class="card p-4 text-center">

<h2>
<?= $totalKomentar ?>
</h2>

<p>Data Terbaru</p>

</div>

</div>

</div>

<!-- WHATSAPP -->

<div class="text-center mb-5">

<a
href="https://chat.whatsapp.com/KWqZ2jlLJ621v99M8l4Vx8"
target="_blank"
class="btn btn-success btn-lg">

Gabung Grup WhatsApp

</a>

</div>

<!-- FORM KOMENTAR -->

<div class="card p-4 mb-5">

<h3>Tulis Diskusi</h3>

<form action="save_comment.php" method="POST">

<textarea
name="komentar"
class="form-control mb-3"
rows="4"
required>
</textarea>

<button
class="btn btn-green">

Kirim Komentar

</button>

</form>

</div>

<!-- DAFTAR KOMENTAR -->

<h3 class="mb-4">
Diskusi Terbaru
</h3>

<?php

$query = mysqli_query(
$conn,
"SELECT komentar_forum.*,
users.nama
FROM komentar_forum
JOIN users
ON komentar_forum.user_id = users.id
ORDER BY komentar_forum.created_at DESC"
);

while($row=mysqli_fetch_assoc($query))
{

?>

<div class="comment-box">

<h5 class="comment-user">

<?= $row['nama']; ?>

</h5>

<p>

<?= $row['komentar']; ?>

</p>

<small>

<?= $row['created_at']; ?>

</small>

<br><br>

<?php

if($_SESSION['user_id']==$row['user_id'])
{

?>

<a
href="edit_comment.php?id=<?= $row['id']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a
href="delete_comment.php?id=<?= $row['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus komentar?')">

Hapus

</a>

<?php } ?>

</div>

<?php } ?>

</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>