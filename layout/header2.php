  
<header class="w3l-header">
	<div class="hero-header-11">
		<div class="hero-header-11-content">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
					<a class="navbar-brand" href="index.html"><img src="/assets/images/logo-icon.png" alt="" />Skill</a>
					<!-- if logo is image enable this   
				<a class="navbar-brand" href="#index.html">
						<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
				</a> -->
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
						<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item @@home-active">
								<a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="about.php">About</a>
							</li>
							<li class="nav-item @@services-active">
								<a class="nav-link" href="services.php">Services</a>
							</li>
							<li class="nav-item @@contact-active">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
                            <?php
								session_start();
								

								// Check if user is logged in
								if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
									$name = $_SESSION['name'];
								// Display logout button
								echo '<li><a href="/signup/logout.php">Logout</a></li>';
								echo '<li>Welcome, ' . $name . '</li>';
								} else {
								// Display Login and register buttons
								echo 
								'<li class="nav-item @@contact-active"><a class="nav-link" href="/signup/login.php">Login</a></li>
								<li class="nav-item @@register-active"><a class="nav-link" href="/signup/register.php">Register</a></li>
								';
								}
								?>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
