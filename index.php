<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="./Assets/Icon.png" type="image/x-icon" />
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
		integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
		crossorigin="anonymous" />
	<link rel="stylesheet" href="./styles/main.css" />
	<link rel="stylesheet" href="./styles/home.css" />
	<title>Love & Serve: Bakery & Cafe | Home</title>
</head>

<body>
	<!-- Navbar -->
	<nav>
		<div class="navbar">
			<div class="logo"><img src="./Assets/Icon.png" alt="Logo" /></div>
			<div class="title">
				<h1>Love & Serve: Bakery & Cafe</h1>
			</div>
			<div id="nav-buttons">
				<?php
				session_start();
				if ($_SESSION['LOGGED_IN'] === false || !isset($_SESSION['LOGGED_IN'])) {
					echo '
								<div>
									<a href="./login.php"><i class="fa fa-sign-in fa-2x" aria-hidden="true"></i></a>
								</div>';
				} else if ($_SESSION['LOGGED_IN'] === true) {
					echo '
								<div>
									<a href="./profile.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
								</div>
								<div>
            						<a href="./logout.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a>
        						</div>';
				}
				?>
				<div id="sidebar-toggle">
					<i class="fa fa-bars fa-2x" id="toggle-icon" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div id="sidebar">
			<div class="page-links">
				<ul>
					<li>
						<div class="page-img">
							<img src="./Assets/homepage.png" alt="Home" />
						</div>
						<a href="./index.php">Home</a>
					</li>
					<li>
						<div class="page-img">
							<img src="./Assets/menupage.png" alt="Menu" />
						</div>
						<a href="./menu.php">Menu</a>
					</li>
					<li>
						<div class="page-img">
							<img src="./Assets/locationpage.png" alt="Locations" />
						</div>
						<a href="./locations.php">Locations</a>
					</li>
					<li>
						<div class="page-img">
							<img src="./Assets/aboutpage.png" alt="About" />
						</div>
						<a href="./about.php">About Us</a>
					</li>
					<li>
						<div class="page-img">
							<img src="./Assets/contactpage.png" alt="Contact" />
						</div>
						<a href="./contact.php">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Hero Section -->
	<main>
		<div class="hero">
			<h2>Where Every Sip Tastes Like Home & Every Bite Tastes Like Love</h2>
			<p>
				We provide the best experience for your daily snacks and beverages. With our top
				rated services and food. We have everything to make your experience relaxing and
				soothing. We hope to see you soon.
			</p>
		</div>
		<div class="menu-showcase">
			<div class="headbar">
				<h3>Our Menu</h3>
				<h3>
					<a href="./menu.php">Show All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</h3>
			</div>
			<div class="menu">
				<div class="items">
					<div class="item">
						<div class="item-img">
							<img src="./Assets/menu/mocha.jpg" alt="Mocha" />
						</div>
						<p>Mocha</p>
						<p>₹140</p>
					</div>
					<div class="item">
						<div class="item-img">
							<img src="./Assets/menu/cappuccino.jpg" alt="Cappuccino" />
						</div>
						<p>Cappuccino</p>
						<p>₹120</p>
					</div>
					<div class="item">
						<div class="item-img">
							<img src="./Assets/menu/chocolate-glazed-donut.jpg" alt="Donut" />
						</div>
						<p>Chocolate Donuts</p>
						<p>₹70</p>
					</div>
				</div>
				<div class="sale-item">
					<div class="items-imgs">
						<div class="items-img">
							<img src="./Assets/categories/coffee-cup.png" alt="Donut" />
						</div>
						<div class="items-img">
							<img src="./Assets/categories/sandwich.png" alt="Cappuccino" />
						</div>
					</div>
					<div class="sale-text">
						<h4>Sweater Weather Sale</h4>
						<p>20% off on Coffees & 30% off on Sandwiches</p>
					</div>
				</div>
			</div>
		</div>
		<div class="other-links">
			<div class="links">
				<div class="locations-link">
					<p>Visit the Love-n-Serve nearest to you</p>
					<div class="btn"><a href="locations.php">Locations</a></div>
				</div>
				<div class="h-sep"></div>
				<div class="contact-link">
					<p>For Special Deliveries & Requests</p>
					<div class="btn"><a href="contact.php">Contact Us</a></div>
				</div>
			</div>
			<div class="big-img">
				<img src="./Assets/showcase.jpg" alt="Showcase" />
			</div>
		</div>
	</main>

	<!-- Footer -->
	<footer>
		<div class="footer">
			<div class="footer-head">
				<div class="footer-logo"><img src="./Assets/Logo.png" alt="Logo" /></div>
				<div class="footer-title">
					<h1>Love & Serve: Bakery & Cafe</h1>
					<p>Kunal Kumar & Sambhav Arora &copy; 2024</p>
				</div>
			</div>
			<div class="footer-links">
				<div class="footer-nav">
					<a href="menu.php">Menu</a>
					<a href="locations.php">Locations</a>
					<a href="about.php">About Us</a>
					<a href="contact.php">Contact Us</a>
				</div>
				<div class="social-links">
					<p>Our Social:</p>
					<a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
					<a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
				</div>
				<div class="order-links">
					<p>Order Now:</p>
					<a href="#"><img src="./Assets/zomato.png" alt="zomato" /></a>
					<a href="#"><img src="./Assets/swiggy.png" alt="swiggy" /></a>
				</div>
			</div>
		</div>
	</footer>

	<script src="./js/sidebar.js"></script>
</body>

</html>