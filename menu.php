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
	<link rel="stylesheet" href="./styles/menu.css" />
	<title>Love & Serve: Bakery & Cafe | Menu</title>
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
		<div class="heading">
			<h2>Our Menu</h2>
			<p>Discover Our Delicious Collections of Snacks & Beverages</p>
		</div>
		<div class="menu-search">
			<div class="select-type">
				<p>Dine-in/ Takeaway</p>
				<div class="toggle toggle-on">
					<div class="slider">
						<div class="slider-btn"></div>
					</div>
				</div>
				<p>Delivery</p>
			</div>
			<div class="search-bar">
				<form>
					<input type="text" name="search" id="search" placeholder="Search..." />
					<div class="btn" id="search-btn">
						<i class="fa fa-search" aria-hidden="true"></i>
					</div>
				</form>
			</div>
			<div class="cart-btn btn">
				<p>See Cart</p>
				<p>0</p>
				<i class="fa fa-shopping-cart" aria-hidden="true"></i>
			</div>
		</div>
		<div class="menu">
			<div id="categories">
				<div class="category">
					<div class="category-img">
						<img src="./Assets/categories/coffee-cup.png" alt="Coffee Cup" />
					</div>
					<p>Coffee & Beverages</p>
				</div>
				<div class="category">
					<div class="category-img">
						<img src="./Assets/categories/milkshake.png" alt="Milkshake" />
					</div>
					<p>Milkshakes & Cold Beverages</p>
				</div>
				<div class="category">
					<div class="category-img">
						<img
							src="./Assets/categories/strawberry-cake.png"
							alt="Strawberry Cake" />
					</div>
					<p>Bakery & Pasteries</p>
				</div>
				<div class="category">
					<div class="category-img">
						<img src="./Assets/categories/donut.png" alt="Donut" />
					</div>
					<p>Donuts</p>
				</div>
				<div class="category">
					<div class="category-img">
						<img src="./Assets/categories/sandwich.png" alt="Sandwich" />
					</div>
					<p>Bread & Sandwiches</p>
				</div>
				<div class="category">
					<div class="category-img">
						<img src="./Assets/categories/fast-food.png" alt="Fast Fodd" />
					</div>
					<p>Snacks & Quick Bites</p>
				</div>
				<div class="category">
					<div class="category-img">
						<img src="./Assets/categories/sweets.png" alt="Sweets" />
					</div>
					<p>Desserts</p>
				</div>
			</div>
			<div id="items">
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/espresso.jpg" alt="Espresso" />
					</div>
					<p class="name">Espresso</p>
					<p class="price">₹80</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/americano.jpg" alt="Americano" />
					</div>
					<p class="name">Americano</p>
					<p class="price">₹90</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/cappuccino.jpg" alt="Cappuccino" />
					</div>
					<p class="name">Cappuccino</p>
					<p class="price">₹120</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/latte.jpg" alt="Latte" />
					</div>
					<p class="name">Latte</p>
					<p class="price">₹130</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/mocha.jpg" alt="Mocha" />
					</div>
					<p class="name">Mocha</p>
					<p class="price">₹140</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/affogato.jpg" alt="Affogato" />
					</div>
					<p class="name">Affogato</p>
					<p class="price">₹150</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/iced-coffee.jpg" alt="Iced Coffee" />
					</div>
					<p class="name">Iced Coffee</p>
					<p class="price">₹130</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/iced-latte.jpg" alt="Iced Latte" />
					</div>
					<p class="name">Iced Latte</p>
					<p class="price">₹140</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/green-tea.jpg" alt="Green Tea" />
					</div>
					<p class="name">Green Tea</p>
					<p class="price">₹60</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/masala-chai.jpg" alt="Masala Chai" />
					</div>
					<p class="name">Masala Chai</p>
					<p class="price">₹50</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/vanilla-milkshake.jpg" alt="Vanilla Milkshake" />
					</div>
					<p class="name">Vanilla Milkshake</p>
					<p class="price">₹120</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/chocolate-milkshake.jpg" alt="Chocolate Milkshake" />
					</div>
					<p class="name">Chocolate Milkshake</p>
					<p class="price">₹140</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/strawberry-milkshake.jpg" alt="Strawberry Milkshake" />
					</div>
					<p class="name">Strawberry Milkshake</p>
					<p class="price">₹130</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/oreo-milkshake.jpg" alt="Oreo Milkshake" />
					</div>
					<p class="name">Oreo Milkshake</p>
					<p class="price">₹150</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/fruit-punch.jpg" alt="Fruit Punch" />
					</div>
					<p class="name">Fruit Punch</p>
					<p class="price">₹110</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/lemon-iced-tea.jpg" alt="Lemon Iced Tea" />
					</div>
					<p class="name">Lemon Iced Tea</p>
					<p class="price">₹90</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/croissant.jpg" alt="Croissant" />
					</div>
					<p class="name">Croissant</p>
					<p class="price">₹80</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/danish-pastry.jpg" alt="Danish Pastry" />
					</div>
					<p class="name">Danish Pastry</p>
					<p class="price">₹100</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/chocolate-muffin.jpg" alt="Chocolate Muffin" />
					</div>
					<p class="name">Chocolate Muffin</p>
					<p class="price">₹70</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/blueberry-muffin.jpg" alt="Blueberry Muffin" />
					</div>
					<p class="name">Blueberry Muffin</p>
					<p class="price">₹80</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/almond-tart.jpg" alt="Almond Tart" />
					</div>
					<p class="name">Almond Tart</p>
					<p class="price">₹90</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/cinnamon-roll.jpg" alt="Cinnamon Roll" />
					</div>
					<p class="name">Cinnamon Roll</p>
					<p class="price">₹110</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/banana-bread.jpg" alt="Banana Bread" />
					</div>
					<p class="name">Banana Bread</p>
					<p class="price">₹90</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/brownie.jpg" alt="Brownie" />
					</div>
					<p class="name">Brownie</p>
					<p class="price">₹80</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/cheesecake.jpg" alt="Cheesecake Slice" />
					</div>
					<p class="name">Cheesecake Slice</p>
					<p class="price">₹150</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/chocolate-truffle-cake.jpg" alt="Chocolate Truffle Cake Slice" />
					</div>
					<p class="name">Truffle Cake</p>
					<p class="price">₹160</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/chocolate-glazed-donut.jpg" alt="Chocolate Glazed Donut" />
					</div>
					<p class="name">Chocolate Donut</p>
					<p class="price">₹70</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/strawberry-frosted-donut.jpg" alt="Strawberry Frosted Donut" />
					</div>
					<p class="name">Strawberry Donut</p>
					<p class="price">₹70</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/cinnamon-sugar-donut.jpg" alt="Cinnamon Sugar Donut" />
					</div>
					<p class="name">Cinnamon Donut</p>
					<p class="price">₹65</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/sprinkle-donut.jpg" alt="Sprinkle Donut" />
					</div>
					<p class="name">Sprinkle Donut</p>
					<p class="price">₹70</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/garlic-bread.jpg" alt="Garlic Bread" />
					</div>
					<p class="name">Garlic Bread</p>
					<p class="price">₹60</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/grilled-cheese-sandwich.jpg" alt="Grilled Cheese Sandwich" />
					</div>
					<p class="name">Grilled Cheese Sandwich</p>
					<p class="price">₹90</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/veggie-sandwich.jpg" alt="Veggie Sandwich" />
					</div>
					<p class="name">Veggie Sandwich</p>
					<p class="price">₹100</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/french-fries.jpg" alt="French Fries" />
					</div>
					<p class="name">French Fries</p>
					<p class="price">₹70</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/cheesy-fries.jpg" alt="Cheesy Fries" />
					</div>
					<p class="name">Cheesy Fries</p>
					<p class="price">₹90</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/nachos.jpg" alt="Nachos" />
					</div>
					<p class="name">Nachos</p>
					<p class="price">₹120</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/potato-wedges.jpg" alt="Potato Wedges" />
					</div>
					<p class="name">Potato Wedges</p>
					<p class="price">₹80</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/veggie-wrap.jpg" alt="Veggie Wrap" />
					</div>
					<p class="name">Veggie Wrap</p>
					<p class="price">₹120</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/paneer-wrap.jpg" alt="Paneer Wrap" />
					</div>
					<p class="name">Paneer Wrap</p>
					<p class="price">₹130</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/chicken-wrap.jpg" alt="Chicken Wrap" />
					</div>
					<p class="name">Chicken Wrap</p>
					<p class="price">₹150</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/veg-burger.jpg" alt="Veg Burger" />
					</div>
					<p class="name">Veg Burger</p>
					<p class="price">₹120</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/chicken-burger.jpg" alt="Chicken Burger" />
					</div>
					<p class="name">Chicken Burger</p>
					<p class="price">₹140</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/choco-lava-cake.jpg" alt="Choco Lava Cake" />
					</div>
					<p class="name">Choco Lava Cake</p>
					<p class="price">₹90</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/tiramisu.jpg" alt="Tiramisu" />
					</div>
					<p class="name">Tiramisu</p>
					<p class="price">₹150</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
				<div class="item">
					<div class="item-img">
						<img src="./Assets/menu/mousse.jpg" alt="Mousse" />
					</div>
					<p class="name">Mousse</p>
					<p class="price">₹120</p>
					<div class="add-cart btn">
						<p>Add To Cart</p>
					</div>
				</div>
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

	<!-- Scripts -->
	<script src="./js/sidebar.js"></script>
</body>

</html>