<?php require 'header.php'; ?>

<div class="container mt-5">
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner mb-5">
      <div class="carousel-item active">
        <img src="img/aw3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/kawsy.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<?php include 'footer.php'; ?>