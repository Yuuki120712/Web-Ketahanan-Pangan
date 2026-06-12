<?php include 'includes/config.php'; ?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Home</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="assets/style.css">

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
    url('element/background-content.jpg');

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

<!-- HERO -->

<section class="hero">

<div class="hero-overlay"></div>

<div class="container hero-content">

<h1>
Analisis Ketahanan Pangan Indonesia
</h1>

<p>
Menganalisis kondisi ketahanan pangan
berdasarkan Indeks Ketahanan Pangan (IKP)
tahun 2024–2026.
</p>

<a href="content.php"
class="btn btn-green btn-lg">

Lihat Data

</a>

</div>

</section>

<!-- 4 PILAR -->

<section class="container py-5">

<h2 class="section-title text-center">
4 Pilar Ketahanan Pangan
</h2>

<div class="row g-4">

<div class="col-md-6 col-lg-3">

<div class="card p-4">

<h4>Ketersediaan</h4>

<p>
Ketersediaan pangan yang cukup bagi seluruh masyarakat.
</p>

</div>

</div>

<div class="col-md-6 col-lg-3">

<div class="card p-4">

<h4>Keterjangkauan</h4>

<p>
Kemampuan masyarakat memperoleh pangan.
</p>

</div>

</div>

<div class="col-md-6 col-lg-3">

<div class="card p-4">

<h4>Keamanan</h4>

<p>
Pangan harus aman dan bergizi.
</p>

</div>

</div>

<div class="col-md-6 col-lg-3">

<div class="card p-4">

<h4>Stabilitas</h4>

<p>
Ketersediaan pangan harus terjaga sepanjang waktu.
</p>

</div>

</div>

</div>

</section>

<!-- IKP -->

<section class="container py-5">

<h2 class="section-title text-center">

Apa itu IKP?

</h2>

<div class="card p-4">

<p><center>
Indeks Ketahanan Pangan (IKP) merupakan <b>alat ukur</b> yang menggambarkan kondisi
ketahanan pangan berdasarkan <b>empat aspek utama</b>, yaitu ketersediaan, keterjangkauan, keamanan dan stabilitas. Melalui IKP, dapat diketahui tingkat ketahanan pangan setiap provinsi
sehingga memudahkan dalam mengidentifikasi daerah yang memiliki kondisi baik maupun yang
masih memerlukan perhatian.
</center></p>

</div>

</section>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>