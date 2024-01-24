<?php @include 'links.php'; ?>
<?php @include '../layout/header.php'; ?>
<?php
// Define base URL for absolute paths
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . '/skilldevelopment';
?>

<main>


  <section class="w3l-about1" id="about">
    <div id="cwp23-block" class="py-5">
      <div class="container py-lg-5">
        <div class="row cwp23-content align-items-center">
          <div class="col-lg-6 cwp23-text">
            <div class="cwp23-title">
              <h3>Welcome to the
                Professional Education Theme! </h3>
            </div>
            <div class="cwp23-text-cols">
              <div class="column">
                <span class="fa fa-smile-o" aria-hidden="true"></span>
                <a href="'$base_url'.'/layout/services.php'">Group Seminars</a>
                <p>consectetur adipisicing elit, sed do eiusmod tempor </p>
              </div>
              <div class="column">
                <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                <a href="'$base_url'.'/layout/services.php'">Trending Courses</a>
                <p>consectetur adipisicing elit, sed do eiusmod tempor </p>
              </div>
              <div class="column">
                <span class="fa fa-history" aria-hidden="true"></span>
                <a href="'$base_url'.'/layout/services.php'">Large Library</a>
                <p>consectetur adipisicing elit, sed do eiusmod tempor </p>
              </div>
              <div class="column">
                <span class="fa fa-users" aria-hidden="true"></span>
                <a href="'$base_url'.'/layout/services.php'">Expert Teachers</a>
                <p>consectetur adipisicing elit, sed do eiusmod tempor </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-5 cwp23-img">
            <img src="../assets/images/g5.jpg" class="img-fluid" alt="vicky aboutimage" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- stats -->
  <section class="w3l-stats py-lg-5 py-4" id="stats">
    <div class="gallery-inner container py-md-5 py-4">
      <div class="row stats-con text-white">
        <div class="col-md-3 col-6 stats_info counter_grid">
          <span class="fa fa-smile-o"></span>
          <p class="counter">196</p>
          <h4>Complete Courses</h4>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid1">
          <span class="fa fa-graduation-cap"></span>
          <p class="counter">96</p>
          <h4>Certified Teachers</h4>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
          <span class="fa fa-history"></span>
          <p class="counter">25</p>
          <h4>Years of Experience</h4>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
          <span class="fa fa-users"></span>
          <p class="counter">890</p>
          <h4>Students Enrolled</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->
  <section class="w3l-courses">
    <div class="blog py-5" id="courses">
      <div class="container py-lg-5">
        <div class="header-section text-center">
          <h3 class="mb-2">Various courses to choose from</h3>
        </div>

        <div class="row mt-md-5 mt-4">
          <div class="col-md-12 mx-auto">
            <div class="owl-two owl-carousel owl-theme">
              <div class="item">
                <div class="card">
                  <div class="card-header p-0 position-relative">
                    <a href="#url" class="zoom d-block">
                      <img class="card-img-bottom d-block" src="../assets/images/g1.jpg" alt="Card image cap">
                    </a>
                    <div class="author">
                      <div class="author-image">
                        <img src="../assets/images/student2.jpg" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                      </div>
                      <div class="course-title">
                        <a href="#url">Course Title</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body course-details">
                    <div class="price-review d-flex justify-content-between mb-1align-items-center">
                      <p>$149</p>
                      <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                    </div>
                    <a href="#url" class="course-desc">At vero eos et accusam et
                      justo uo dolores</a>
                  </div>
                  <div class="card-footer course-price-view">
                    <ul class="blog-list">
                      <li>
                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                      </li>
                      <li>
                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="card">
                  <div class="card-header p-0 position-relative">
                    <a href="#url" class="zoom d-block">
                      <img class="card-img-bottom d-block" src="../assets/images/g2.jpg" alt="Card image cap">
                    </a>
                    <div class="author">
                      <div class="author-image">
                        <img src="../assets/images/student3.jpg" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                      </div>
                      <div class="course-title">
                        <a href="#url">Course Title</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body course-details">
                    <div class="price-review d-flex justify-content-between mb-1align-items-center">
                      <p>$149</p>
                      <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                    </div>
                    <a href="#url" class="course-desc">At vero eos et accusam et
                      justo uo dolores</a>
                  </div>
                  <div class="card-footer course-price-view">
                    <ul class="blog-list">
                      <li>
                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                      </li>
                      <li>
                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="card">
                  <div class="card-header p-0 position-relative">
                    <a href="#url" class="zoom d-block">
                      <img class="card-img-bottom d-block" src="../assets/images/g3.jpg" alt="Card image cap">
                    </a>
                    <div class="author">
                      <div class="author-image">
                        <img src="../assets/images/student4.jpg" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                      </div>
                      <div class="course-title">
                        <a href="#url">Course Title</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body course-details">
                    <div class="price-review d-flex justify-content-between mb-1align-items-center">
                      <p>$149</p>
                      <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                    </div>
                    <a href="#url" class="course-desc">At vero eos et accusam et
                      justo uo dolores</a>
                  </div>
                  <div class="card-footer course-price-view">
                    <ul class="blog-list">
                      <li>
                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                      </li>
                      <li>
                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="card">
                  <div class="card-header p-0 position-relative">
                    <a href="#url" class="zoom d-block">
                      <img class="card-img-bottom d-block" src="../assets/images/g5.jpg" alt="Card image cap">
                    </a>
                    <div class="author">
                      <div class="author-image">
                        <img src="../assets/images/student1.jpg" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                      </div>
                      <div class="course-title">
                        <a href="#url">Course Title</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body course-details">
                    <div class="price-review d-flex justify-content-between mb-1align-items-center">
                      <p>$149</p>
                      <a href="#url" class="reviews d-inline-block">(56 Reviews)</a>
                    </div>
                    <a href="#url" class="course-desc">At vero eos et accusam et
                      justo uo dolores</a>
                  </div>
                  <div class="card-footer course-price-view">
                    <ul class="blog-list">
                      <li>
                        <a href="#url"><span class="fa fa-heart"></span> 98</a>
                      </li>
                      <li>
                        <a href="#url"><span class="fa fa-user"></span> 15</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--  Intro section -->
  <section class="w3l-intro" id="intro">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <h2 class="mb-5">We are true to ourselves, and commit to always perform at our best.</h2>
            <a href="./contact.php" class="btn btn-light theme-button py-2 px-5">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //Intro section -->
  <!-- team -->
  <section class="w3l-team" id="team">
    <div class="team-block py-5">
      <div class="container py-lg-5">
        <div class="wthree-title">
          <div class="header-section text-center">
            <h3 class="mb-2">Meet Our Teachers</h3>
            <p>Vestibulum volutpat non eros ut vulputate. Nunc id risus accumsan Donec
              mi nulla, auctor nec sem a, ornare auctor mi.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 mt-5">
            <div class="box16">
              <a href="#url"><img src="../assets/images/student1.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Victoria</a></h3>
                <span class="post">Director</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mt-5">
            <div class="box16">
              <a href="#url"><img src="../assets/images/student2.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Michael</a></h3>
                <span class="post">Managing Director</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mt-5">
            <div class="box16">
              <a href="#url"><img src="../assets/images/student3.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">George</a></h3>
                <span class="post">Designer</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mt-5">
            <div class="box16">
              <a href="#url"><img src="../assets/images/student4.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">George</a></h3>
                <span class="post">Designer</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mt-5">
            <div class="box16">
              <a href="#url"><img src="../assets/images/student1.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Victoria</a></h3>
                <span class="post">Director</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mt-5">
            <div class="box16">
              <a href="#url"><img src="../assets/images/student2.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Michael</a></h3>
                <span class="post">Managing Director</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //team -->
  <?php if (isset($_SESSION['username'])) : ?>
    <?php else : ?>
<section class="w3l-quote py-5">
    <div class="container py-lg-3">
      <h3>Want to Join?</h3>
      <p>Lorem ipsum dolor sit amet elit. Nisi facere reprehenderit!</p>
      <a href="./contact.php" class="btn btn-secondary theme-button">Become a Teacher</a>
      <a href="../signup/register.php" class="btn btn-outline-secondary theme-button ml-2">Sign Up</a>
    </div>
  </section>              <?php endif; ?>

</main>
<!-- footer -->
<?php @include '../layout/footer.php'; ?>
<!-- //footer -->