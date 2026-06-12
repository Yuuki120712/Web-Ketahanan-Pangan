<?php
include 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Conclusion</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="assets/css/style.css">

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

<div class="container py-5">

<h1 class="section-title text-center">
Kesimpulan & Strategi
</h1>

<!-- KESIMPULAN -->

<div class="card p-4 mb-5">

<h3 class="mb-3">
Kesimpulan
</h3>

<p>
Berdasarkan data Indeks Ketahanan Pangan (IKP)
tahun 2024 hingga 2026, sebagian besar provinsi
di Indonesia menunjukkan kondisi ketahanan pangan
yang cukup baik. Provinsi-provinsi di Pulau Jawa,
Bali, dan DKI Jakarta memiliki nilai IKP yang relatif
tinggi, sedangkan beberapa wilayah di Indonesia
Timur masih memerlukan perhatian lebih dalam
penguatan akses pangan, infrastruktur, dan distribusi.
</p>

<p>
Secara umum, tren IKP mengalami peningkatan setiap
tahun yang menunjukkan adanya perbaikan pada aspek
ketersediaan, keterjangkauan, dan pemanfaatan pangan.
</p>

</div>

<!-- STRATEGI -->

<div class="card p-4">

<h3 class="mb-4">
Strategi Peningkatan Ketahanan Pangan
</h3>

<div class="accordion" id="strategiAccordion">

<!-- ITEM 1 -->

<div class="accordion-item">

<h2 class="accordion-header">

<button
class="accordion-button"
type="button"
data-bs-toggle="collapse"
data-bs-target="#satu">

1. Peningkatan Infrastruktur Pertanian

</button>

</h2>

<div
id="satu"
class="accordion-collapse collapse show">

<div class="accordion-body">

Pengembangan jaringan irigasi,
jalan distribusi, dan fasilitas
penyimpanan pangan untuk
meningkatkan produktivitas.

</div>

</div>

</div>

<!-- ITEM 2 -->

<div class="accordion-item">

<h2 class="accordion-header">

<button
class="accordion-button collapsed"
type="button"
data-bs-toggle="collapse"
data-bs-target="#dua">

2. Pemanfaatan Teknologi Pertanian

</button>

</h2>

<div
id="dua"
class="accordion-collapse collapse">

<div class="accordion-body">

Penerapan teknologi modern
untuk meningkatkan hasil panen,
efisiensi produksi, dan kualitas pangan.

</div>

</div>

</div>

<!-- ITEM 3 -->

<div class="accordion-item">

<h2 class="accordion-header">

<button
class="accordion-button collapsed"
type="button"
data-bs-toggle="collapse"
data-bs-target="#tiga">

3. Diversifikasi Pangan

</button>

</h2>

<div
id="tiga"
class="accordion-collapse collapse">

<div class="accordion-body">

Mengurangi ketergantungan pada satu
komoditas dengan mendorong konsumsi
berbagai sumber pangan lokal.

</div>

</div>

</div>

<!-- ITEM 4 -->

<div class="accordion-item">

<h2 class="accordion-header">

<button
class="accordion-button collapsed"
type="button"
data-bs-toggle="collapse"
data-bs-target="#empat">

4. Penguatan Kebijakan Pemerintah

</button>

</h2>

<div
id="empat"
class="accordion-collapse collapse">

<div class="accordion-body">

Meningkatkan dukungan kepada petani,
stabilisasi harga pangan, dan penguatan
cadangan pangan nasional.

</div>

</div>

</div>

</div>

</div>

</div>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>