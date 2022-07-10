<?php
session_start();
?>

<link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.js"></script>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cactus in Love</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="productandservice" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product and Service
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Coaching </a></li>
            <li><a class="dropdown-item" href="#">Training</a></li>
            <li><a class="dropdown-item" href="#">Interpreter</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">News</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Question</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>



      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<?php
if($_SESSION['username']){
?>
<?php
}else{

?>



        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./login.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./register.php">register</a>
        </li>
<?php
}
?>



    </div>
  </div>
</nav>