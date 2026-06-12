<?php
include 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Content</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/style.css">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
    background:green;
    border-radius:15px;
    overflow:hidden;
}

.table thead{
    background:var(--primary);
    color:white;
}

.table tbody tr:hover{
    background:white;
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
   CHART
========================= */

.chart-box{
    position:relative;
    height:320px;
    width:100%;
}

.chart-box canvas{
    max-height:320px;
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
Data Ketahanan Pangan Indonesia
</h1>

<!-- SEARCH -->

<div class="row mb-4">

<div class="col-md-6 mx-auto">

<input
type="text"
id="searchInput"
class="form-control"
placeholder="Cari Provinsi...">

<ul
id="historyBox"
class="list-group mt-2">
</ul>

</div>

</div>

<!-- TABEL IKP -->

<div class="table-responsive">

<table class="table table-bordered table-hover" id="ikpTable">

<thead style="background-color:#4A5F2A; color:white;">

<tr>

<th>Provinsi</th>
<th>IKP 2024</th>
<th>IKP 2025</th>
<th>IKP 2026</th>


</tr>

</thead>


<tbody>

<?php

$query = mysqli_query(
$conn,
"SELECT * FROM data_ikp"
);

while($row = mysqli_fetch_assoc($query))
{
?>

<tr>

<td>
<?= $row['provinsi']; ?>
</td>

<td>
<?= $row['ikp_2024']; ?>
</td>

<td>
<?= $row['ikp_2025']; ?>
</td>

<td>

<?php

if(
isset($_SESSION['role'])
&&
$_SESSION['role'] == "admin"
)
{

?>

<form action="update_ikp.php" method="POST">

<input
type="hidden"
name="id"
value="<?= $row['id']; ?>">

<div class="d-flex gap-2">

<input
type="number"
step="0.01"
name="ikp2026"
value="<?= $row['ikp_2026']; ?>"
class="form-control">

<button
type="submit"
class="btn btn-success btn-sm">

Simpan

</button>

</div>

</form>

<?php

}
else
{

echo $row['ikp_2026'];

}

?>

</td>

</tr>

<?php
}
?>

</tbody>


</table>

</div>

</div>

<div class="container py-5">

<div class="row">

<div class="col-lg-7 mb-4">

<div class="card p-4">

<h3 class="text-center mb-4">
Produksi Komoditas Pangan
</h3>

<div class="chart-box">
<canvas id="barChart"></canvas>
</div>

</div>

</div>

<div class="col-lg-5 mb-4">

<div class="card p-4">

<h3 class="text-center mb-4">
Sebaran Komoditas
</h3>

<div class="chart-box">
<canvas id="pieChart"></canvas>
</div>

</div>

</div>

</div>

</div>

<div class="alert alert-success">

<b>Login sebagai Administrator</b>

</div>

<?php include 'includes/footer.php'; ?>
<script>

document
.getElementById('searchInput')
.addEventListener(
'keyup',
function(){

let filter =
this.value.toUpperCase();

let table =
document.getElementById("ikpTable");

let tr =
table.getElementsByTagName("tr");

for(let i=1;i<tr.length;i++){

let td =
tr[i].getElementsByTagName("td")[0];

if(td){

let txt =
td.textContent || td.innerText;

if(
txt.toUpperCase().indexOf(filter)>-1
){
tr[i].style.display="";
}else{
tr[i].style.display="none";
}

}

}

}
);

</script>

<script>

new Chart(
document.getElementById('barChart'),
{
type:'bar',

data:{

labels:[
'Padi',
'Jagung',
'Kedelai',
'Ubi',
'Singkong'
],

datasets:[{

label:'Produksi (Juta Ton)',

data:[
54,
19,
3,
8,
16
]

}]

}

}
);

new Chart(
document.getElementById('pieChart'),
{

type:'pie',

data:{

labels:[
'Padi',
'Jagung',
'Kedelai',
'Singkong'
],

datasets:[{

data:[
60,
20,
5,
15
]

}]

}

}
);

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/search.js"></script>

</body>
</html>