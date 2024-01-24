<?php
session_start(); // Start the session
// Define base URL for absolute paths
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . '/skilldevelopment';
?>

<header class="w3l-header">
  <div class="hero-header-11">
    <div class="hero-header-11-content">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
          <a class="navbar-brand" href="<?php echo $base_url . '/'; ?>">
            <img src="<?php echo $base_url . '/assets/images/logo-icon.png'; ?>" alt="" />SkillDevelopment
          </a>

          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa fa-bars"></span>
            <span class="navbar-toggler-icon fa fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) === 'index.php') ? '@@home-active' : ''; ?>">
                <a class="nav-link" href="<?php echo $base_url . '/index.php'; ?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) === 'about.php') ? '@@contact-active' : ''; ?>">
                <a class="nav-link" href="<?php echo $base_url . '/layout/about.php'; ?>">About</a>
              </li>
              <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) === 'services.php') ? '@@services-active' : ''; ?>">
                <a class="nav-link" href="<?php echo $base_url . '/layout/services.php'; ?>">Services</a>
              </li>
              <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) === 'contact.php') ? '@@contact-active' : ''; ?>">
                <a class="nav-link" href="<?php echo $base_url . '/layout/contact.php'; ?>">Contact</a>
              </li>
              <?php if (isset($_SESSION['username'])) : ?>
                <li class='nav-item'>
                  <a class='nav-link'>Hello, <?php echo $_SESSION['username']; ?></a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href="<?php echo $base_url . '/signup/logout.php'; ?>">Logout</a>
                  <div id="google_translate_element"></div>
                </li>
              <?php else : ?>
                <li class='nav-item <?php echo (basename($_SERVER['PHP_SELF']) === 'login.php') ? '@@login-active' : ''; ?>'>
                  <a class='nav-link' href="<?php echo $base_url . '/signup/login.php'; ?>">Login</a>
                </li>
                <li class='nav-item <?php echo (basename($_SERVER['PHP_SELF']) === 'register.php') ? '@@register-active' : ''; ?>'>
                  <a class='nav-link' href="<?php echo $base_url . '/signup/register.php'; ?>">Register</a>
                </li>
              <?php endif; ?>
              <div id="google_translate_element"></div>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
  }
  </script>
  
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</header>