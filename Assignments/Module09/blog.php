<?php
include_once('nav.php')
?>
      <div class="container my-5">
         <div class="row">
            <div class="col-md-8">
               <h2 class="mb-4">Latest Blog Posts</h2>
               <div class="card mb-3">
                  <img class="card-img-top" src="images/burger.jpg" alt="Blog Post Image">
                  <div class="card-body">
                     <h3 class="card-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac tristique quam. Nunc eget maximus leo. Mauris bibendum, nulla vel suscipit tempus, neque lacus maximus arcu, at sodales eros justo a libero.</p>
                     <a href="single-post.php" class="read-more">Read More</a>
                  </div>
               </div>
               <div class="card mb-3">
                  <img class="card-img-top" src="images/fast-food.jpg" alt="Blog Post Image">
                  <div class="card-body">
                     <h3 class="card-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac tristique quam. Nunc eget maximus leo. Mauris bibendum, nulla vel suscipit tempus, neque lacus maximus arcu, at sodales eros justo a libero.</p>
                     <a href="single-post.php" class="read-more">Read More</a>
                  </div>
               </div>
               <div class="card mb-3">
                  <img class="card-img-top" src="images/foods.jpg" alt="Blog Post Image">
                  <div class="card-body">
                     <h3 class="card-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac tristique quam. Nunc eget maximus leo. Mauris bibendum, nulla vel suscipit tempus, neque lacus maximus arcu, at sodales eros justo a libero.</p>
                     <a href="single-post.php" class="read-more">Read More</a>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <form class="form-inline mb-4">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search">
                     <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
                     </div>
                  </div>
               </form>
               <h5 class="mb-3">Categories</h5>
               <ul class="list-unstyled">
                  <li><a href="#">Vegetables</a></li>
                  <li><a href="#">Italian</a></li>
                  <li><a href="#">Chinies</a></li>
                  <li><a href="#">Beef</a></li>
                  <li><a href="#">Fast Food</a></li>
                  <li><a href="#">Mixed</a></li>
               </ul>
            </div>
         </div>
      </div>

      
      <?php
include_once('footer.php')
?>