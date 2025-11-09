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
	<link rel="stylesheet" href="./styles/login.css" />
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

	<main>
		<div id="title">
			<h2>Login/SignUp Form</h2>
		</div>
		<div id="login-form">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<div class="inp">
					<label for="username">Username: </label>
					<input type="text" name="username" id="username" required>
				</div>
				<div class="inp">
					<label for="email">Email: </label>
					<input type="text" name="email" id="email">
				</div>
				<div class="inp">
					<label for="phone">Phone: </label>
					<input type="text" name="phone" id="phone">
				</div>
				<div class="inp">
					<label for="password">Password: </label>
					<input type="password" name="password" id="password" required>
				</div>
				<div class="form-submit-buttons">
					<input type="submit" name="submit" value="Sign Up" class="btn">
					<input type="submit" name="submit" value="Login" class="btn">
				</div>
			</form>
		</div>

		<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$error = false;
			$errorMessages = [];

			$inputUsername = trim($_POST['username']);
			$inputPassword = $_POST['password'];

			if (strlen($inputUsername) < 3 || strlen($inputUsername) > 20) {
				$errorMessages[] = "Username must be between 3 and 20 characters.";
				$error = true;
			} elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $inputUsername)) {
				$errorMessages[] = "Username can only contain letters, numbers, and underscores.";
				$error = true;
			}

			if (strlen($inputPassword) < 6) {
				$errorMessages[] = "Password must be at least 6 characters long.";
				$error = true;
			}

			$inputEmail = null;
			if ($_POST['submit'] === 'Sign Up' && !empty($_POST['email'])) {
				$inputEmail = trim($_POST['email']);
				if (!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
					$errorMessages[] = "Invalid email format.";
					$error = true;
				} else {
					$inputEmail = filter_var($inputEmail, FILTER_SANITIZE_EMAIL);
				}
			}

			$inputPhone = null;
			if ($_POST['submit'] === 'Sign Up' && !empty($_POST['phone'])) {
				$inputPhone = trim($_POST['phone']);
				$inputPhone = preg_replace('/[^0-9]/', '', $inputPhone);
				if (strlen($inputPhone) < 10 || strlen($inputPhone) > 15) {
					$errorMessages[] = "Phone number must be between 10 and 15 digits.";
					$error = true;
				}
			}

			// Display validation errors
			if ($error) {
				foreach ($errorMessages as $msg) {
					echo '<div class="message error">' . htmlspecialchars($msg) . '</div>';
				}
			} else {
				$credFile = fopen("./credentials.txt", "r") or die('<div class="message error">Could Not Access Database!</div>');
				$credentials = [];
				while (!feof($credFile)) {
					$line = fgets($credFile);
					$credentials[] = trim($line);
				}
				fclose($credFile);
				$servername = $credentials[0];
				$username = $credentials[1];
				$password = $credentials[2];
				$dbname = $credentials[3];
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
					die('<div class="message error">Connection failed: ' . $conn->connect_error . '</div>');
				}

				if ($_POST['submit'] === 'Sign Up') {
					$signupSql = "INSERT INTO users(username, email, phone, password) VALUES('$inputUsername', '$inputEmail', '$inputPhone', '$inputPassword');";
					if ($conn->query($signupSql) === true) {
						echo '<div class="message success">Sign Up Successful! You can now log in.</div>';
					} else {
						echo '<div class="message error">Error: ' . $conn->error . '</div>';
					}
				} else if ($_POST['submit'] === 'Login') {
					$loginSql = "SELECT * FROM users WHERE username='$inputUsername' AND password='$inputPassword'";
					$result = $conn->query($loginSql);
					if ($result->num_rows > 0) {
						$_SESSION['LOGGED_IN'] = true;
						$_SESSION['USERNAME'] = $inputUsername;
						$_SESSION['EMAIL'] = $inputEmail;
						$_SESSION['PHONE'] = $inputPhone;
						echo '<div class="message success">Login Successful! Welcome, ' . $inputUsername . '.</div>';
					} else {
						echo '<div class="message error">Invalid Username or Password.</div>';
					}
				}
				$conn->close();
			}
		}
		?>
	</main>

	<!-- Footer -->
	<footer>
		<div class="footer">
			<div class="footer-head">
				<div class="footer-logo"><img src="./Assets/Logo.png" alt="Logo" /></div>
				<div class="footer-title">
					<h1>Love & Serve: Bakery & Cafe</h1>
					<p>DAKSS &copy; 2024</p>
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