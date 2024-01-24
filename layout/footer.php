<?php
 
// Define base URL for absolute paths
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . '/skilldevelopment';
?>

<!-- Footer -->
<footer class="w3l-footer-29-main" id="footer">
  <div class="footer-29 py-5">
    <div class="container pb-lg-3">
      <div class="row footer-top-29">
        <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-4">
          <a class="footer-logo mb-md-3 mb-2" href="#url"><img src="../assets/images/logo-icon.png" alt="" />Skill</a>
          <p>We amplify important ideas in mathematics education to help teachers grow their practice and our profession. Lorem ipsum dolor sit
            amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-lg-2 col-md-6 footer-list-29 footer-2 mt-5">
          <h6 class="footer-title-29">Explore More</h6>
          <ul>
            <li><a href="#gallery.html">Gallery</a></li>
            <li><a href="#courses.html">Courses</a></li>
            <li><a href="#landing-single.html">Landing Page</a></li>
            <li><a href="'$base_url'.'/signup/register.php'">Apply Now</a></li>
            <li><a href="'$base_url'.'/layout/contact.php'">Buy Course Online</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 footer-list-29 footer-3 mt-5">
          <div class="properties">
            <h6 class="footer-title-29">Recent Post</h6>
            <a class="d-grid twitter-feed" href="#blog-single.html">
              <img src="../assets/images/g1.jpg" class="img-fluid rounded" alt="">
              <p>How to get Programming language Cartification in 45 days.</p>
            </a>
            <a class="d-grid twitter-feed" href="#blog-single.html">
              <img src="../assets/images/g2.jpg" class="img-fluid rounded" alt="">
              <p>Top class learning from anywhere Lorem ipsum dolor sit amet.</p>
            </a>
            <a class="d-grid twitter-feed" href="#blog-single.html">
              <img src="../assets/images/g3.jpg" class="img-fluid rounded" alt="">
              <p>Improving lives through learning Lorem ipsum dolor sit amet.</p>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 footer-list-29 footer-4 mt-5">
          <h6 class="footer-title-29">Quick Links</h6>
          <ul>
            <li><a href="'$base_url'.'/index.php'">Home</a></li>
            <li><a href="'$base_url'.'/layout/about.php'">About</a></li>
            <li><a href="'$base_url'.'/layout/services.php'">Services</a></li>
            <!-- <li><a href="#blog.html"> Blog</a></li> -->
            <li><a href="'$base_url'.'/layout/contact.php'">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="footers14-block" class="py-3">
    <div class="container">
      <div class="footers14-bottom text-center">
        <div class="social">
          <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
          <a href="#google" class="google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
          <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
          <a href="#instagram" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
          <a href="#youtube" class="youtube"><span class="fa fa-youtube" aria-hidden="true"></span></a>
        </div>
        <div class="copyright mt-1">
          <p>&copy; 2020 Skill. All Rights Reserved | Design by <a href="'$base_url'.'/index.php'">Intelligence Rangers</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up" aria-hidden="true"></span>
  </button>


  <script>
        window.watsonAssistantChatOptions = {
            integrationID: "694ffbff-d54b-41e0-803b-527caea3c0ab", // The ID of this integration.
            region: "eu-gb", // The region your integration is hosted in.
            serviceInstanceID: "260c2a75-9b17-4874-a112-2756e3e9e673", // The ID of your service instance.
            onLoad: async(instance) => {
                await instance.render();
            }
        };
        setTimeout(function() {
            const t = document.createElement('script');
            t.src = "https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
            document.head.appendChild(t);
        });
    </script>
  <!-- <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script> -->
  <!-- /move top -->

</footer>
<!-- Footer -->

<!-- jQuery and Bootstrap JS -->
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

<!-- Template JavaScript -->

<!-- stats number counter-->
<!-- <script src="../../assets/js/jquery.waypoints.min.js"></script> -->
<!-- <script src="../../assets/js/jquery.countup.js"></script> -->
<!-- <script>
  $('.counter').countUp();
</script> -->
<!-- //stats number counter -->


<!-- testimonials owlcarousel -->

<!-- <script src="../../assets/js/owl-carousel.js"></script> -->

<!-- script for owlcarousel -->
<!-- <script>
  $(document).ready(function() {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script> -->
<!-- //script for owlcarousel -->
<!-- //testimonials owlcarousel -->

<!-- script for courses -->
<!-- <script>
  $(document).ready(function() {
    $('.owl-two').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 2,
          nav: false
        },
        1000: {
          items: 3,
          nav: false
        }
      }
    })
  })
</script> -->
<!-- //script for courses -->

<!-- disable body scroll which navbar is in active -->
<!-- <script>
  $(function() {
    $('.navbar-toggler').click(function() {
      $('body').toggleClass('noscroll');
    })
  });
</script> -->
<!-- disable body scroll which navbar is in active -->