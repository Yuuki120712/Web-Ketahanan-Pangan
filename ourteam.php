<?php
include 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Our Team</title>

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
    min-height:350px;
    padding:25px;
}

.team-card img{
    width:180px;
    height:180px;
    object-fit:cover;
    border-radius:50%;
    border:5px solid var(--lightgreen);
    margin-bottom:50px;
    display:block;
    margin:auto;
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
Our Team
</h1>

<div class="row g-4">

<!-- CARD 1 -->

<div class="col-12 col-md-6 col-lg-3">

<div class="card team-card">

<img
src="element/foto-adiba.png"
alt="Admin 1">

<h4>Adiba Bilqis Putri Saifuddin</h4>
<div class="mt-3">

</div>

<p>2043251007</p>

</div>

</div>

<!-- CARD 2 -->

<div class="col-12 col-md-6 col-lg-3">

<div class="card team-card">

<img
src="element/foto-caca.png"
alt="Admin 2">

<h4>Ratu Annisa Fajar Islami</h4>

<p>2043251057</p>

</div>

</div>

<!-- CARD 3 -->

<div class="col-12 col-md-6 col-lg-3">

<div class="card team-card">

<img
src="element/foto-falin.png"
alt="Admin 3">

<h4>Falin Kirana Cinta Amalia</h4>

<p>2043251087</p>

</div>

</div>

<!-- CARD 4 -->

<div class="col-12 col-md-6 col-lg-3">

<div class="card team-card">

<img
src="element/foto-dya.png"
alt="Admin 4">

<h4>Adindya Maharani</h4>

<p>2043251110</p>

</div>

</div>

</div>

</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>