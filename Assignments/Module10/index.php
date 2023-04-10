<?php
include_once 'nav.php';
?>

<section class="banner-wrapper">
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner-1.jpg" class="d-block w-100" alt="banner image">
      </div>
      <div class="carousel-item">
        <img src="images/banner-2.jpg" class="d-block w-100" alt="banner image">
      </div>
      <div class="carousel-item">
        <img src="images/banner-3.jpg" class="d-block w-100" alt="banner image">
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
</section>

<?php
include_once 'footer.php';
?>