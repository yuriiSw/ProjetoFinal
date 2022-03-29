<?php
include_once("../view/header.php");
include_once("../model/usuarioModel.php");
usarAcesso();
?> 
<img src="img/bannerCP.png"/>

<div class="card-group">
  <div class="card">
    <img src="img/cube2CP.png" class="card-img-top" alt="primeira">
  </div>
  <div class="card">
    <img src="img/cube1CP.png" class="card-img-top" alt="...">
    </div>
  <div class="card">
    <img src="img/cube3CP.png" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="img/cube4CP.png" class="card-img-top" alt="...">
  </div>








<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/banner2CP.png" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banner4CP.png" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banner3CP.png" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>

<?php
include_once("../view/footer.php");
?>