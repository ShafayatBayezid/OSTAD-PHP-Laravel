<?php
include_once 'nav.php';
?>

<section class="banner-wrapper">
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner-1.jpg" class="d-block w-100" alt="banner image">
        <div class="carousel-caption d-none d-md-block">
          <h1>WHAT MAKES US DIFFERENT </h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, eveniet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, eveniet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, eveniet!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner-2.jpg" class="d-block w-100" alt="banner image">
        <div class="carousel-caption d-none d-md-block">
          <h1>WE LOVE TO HELP </h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, eveniet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, eveniet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, eveniet!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner-3.jpg" class="d-block w-100" alt="banner image">
        <div class="carousel-caption d-none d-md-block">
          <h1>COME BY & VISIT US</h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, eveniet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, eveniet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, eveniet!</p>
        </div>
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


<section class="about-wrapper section-gap">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-12">
        <div class="about-img">
          <img src="images/about-us.jpg" alt="About Us">
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-12 d-flex align-items-center">
        <div class="title-area">
          <h2>About Us</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum distinctio tenetur eum quos, nostrum dicta dignissimos ratione voluptates ipsam! Maxime officia exercitationem nisi aperiam quis harum voluptas nobis obcaecati incidunt?</p>
          <ul>
            <li class="list-items"> <i class="fa fa-check"></i> Lorem ipsum dolor sit amet </li>
            <li class="list-items"> <i class="fa fa-check"></i> Lorem ipsum dolor sit amet </li>
            <li class="list-items"> <i class="fa fa-check"></i> Lorem ipsum dolor sit amet </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center mt-5 ">
      <a href="about.php" class="btn btn-primary px-5 py-2 justyfy-content-center">Learn More</a>
    </div>
  </div>
</section>

<section class="service-wrapper section-gap">
  <div class="container">
    <div class="title-area text-center">
      <h2>Our Services</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum distinctio tenetur eum quos.</p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card">
          <img src="images/app-dev.jpg" class="card-img-top" alt="our service">
          <div class="card-body">
            <h5 class="card-title">App Development</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card">
            <img src="images/web-dev.jpg" class="card-img-top" alt="our service">

          <div class="card-body">
            <h5 class="card-title">Web Development</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card">
          <img src="images/digi-mark.jpg" class="card-img-top" alt="our service">
          <div class="card-body">
            <h5 class="card-title">Digital Marketing</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5 ">
      <a href="services.php" class="btn btn-primary px-5 py-2 justyfy-content-center">Learn More</a>
    </div>
  </div>
</section>


<section class="portfolio-wrapper section-gap">
  <div class="container">
    <div class="title-area text-center">
      <h2>Our Portfolio</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum distinctio tenetur eum quos.</p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card">
          <img src="images/ecom-project.png" class="card-img-top" alt="our Portfolio">
          <div class="card-body text-center">
            <h5 class="card-title">Ecommerce Site</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <!-- <a href="#" class="btn btn-success py-2 px-5 mt-3"> Learn More</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card">
            <img src="images/app-project.jpg" class="card-img-top" alt="our Portfolio">

          <div class="card-body text-center">
            <h5 class="card-title">Handy App</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <!-- <a href="#" class="btn btn-success py-2 px-5 mt-3"> Learn More</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card">
          <img src="images/admin-project.jpg" class="card-img-top" alt="our service">
          <div class="card-body text-center">
            <h5 class="card-title">Admin Panel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <!-- <a href="#" class="btn btn-success py-2 px-5 mt-3"> Learn More</a> -->
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5 ">
      <a href="services.php" class="btn btn-primary px-5 py-2 justyfy-content-center">Learn More</a>
    </div>
  </div>
</section>


<section class="blog-wrapper section-gap">
  <div class="container">
    <div class="title-area text-center">
      <h2>Latest News</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum distinctio tenetur eum quos.</p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card">
          <img src="images/blog/blog-1.jpg" class="card-img-top" alt="Blog Post">
          <div class="card-body">
            <p class="text-warning">Technology</p>
            <h5 class="card-title">9 Ways to Deal with Imposter Syndrome and Achieve Success at Work</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content and make up the bulk of the card's content build on the card title and make up the bulk of the card's content and make up the bulk of the card's content.</p>
            <a href="single-post.php" class="btn btn-success py-2 px-5 mt-3"> Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card">
            <img src="images/blog/blog-2.jpg" class="card-img-top" alt="Blog Post">
          <div class="card-body">
            <p class="text-warning">Technology</p>
            <h5 class="card-title">5 Content Writing Tools to Improve your Content Writing Skills</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content and make up the bulk of the card's content build on the card title and make up the bulk of the card's content and make up the bulk of the card's content.</p>
            <a href="single-post.php" class="btn btn-success py-2 px-5 mt-3"> Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card">
          <img src="images/blog/blog-3.jpg" class="card-img-top" alt="Blog Post">
          <div class="card-body">
            <p class="text-warning">Technology</p>
            <h5 class="card-title">Data Scientist in 2023 - Salary, Skills, and Job Roles in market</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content and make up the bulk of the card's content build on the card title and make up the bulk of the card's content and make up the bulk of the card's content.</p>
            <a href="single-post.php" class="btn btn-success py-2 px-5 mt-3"> Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5 ">
      <a href="blog.php" class="btn btn-success px-5 py-2 justyfy-content-center">Learn More</a>
    </div>
  </div>
</section>



<?php
include_once 'footer.php';
?>