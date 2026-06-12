<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-light custom-navbar sticky-top">

<div class="container">

<a class="navbar-brand fw-bold" href="home.php">
🌾 NusaGrow
</a>

<button
class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link <?= ($current=='home.php') ? 'active' : '' ?>"
href="home.php">
Home
</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($current=='content.php') ? 'active' : '' ?>"
href="content.php">
Content
</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($current=='conclusion.php') ? 'active' : '' ?>"
href="conclusion.php">
Conclusion
</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($current=='ourteam.php') ? 'active' : '' ?>"
href="ourteam.php">
Our Team
</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($current=='forum.php') ? 'active' : '' ?>"
href="forum.php">
Forum Diskusi
</a>
</li>

<!-- MENU ADMIN -->

<li class="nav-item">
<a class="nav-link text-danger fw-bold"
href="admin_login.php">
Admin
</a>
</li>

<?php
if(
isset($_SESSION['role'])
&&
$_SESSION['role']=="admin"
){
?>

<li class="nav-item">
<a class="nav-link text-danger fw-bold"
href="logout.php">

Logout Admin

</a>
</li>

<?php } ?>

<!-- LOGOUT MUNCUL SETELAH LOGIN -->

<?php if(isset($_SESSION['user_id'])) { ?>

<li class="nav-item">
<a class="nav-link text-danger fw-bold"
href="logout.php">
Logout
</a>
</li>

<?php } ?>

</ul>

</div>

</div>

</nav>