<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>SECURE BANK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="main.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo">
						<span class="symbol"><img src="LogoMakerCa-1701942624811-removebg-preview.png" alt="" height="120" width="170" /></span><span class="title"></span>
					</a>
					<!-- <h1><a href="index.html">Alpha</a> by HTML5 UP</h1> -->
					<nav id="nav">
						<ul>
							<!-- <a href="index.html" class="logo">
								<span class="symbol"><img src="C:\Users\NAVIROHI\OneDrive\Web dev\NextBanking\NextBanking (1)\images\nb.png" alt="" height="120" width="170" /></span><span class="title"></span>
							</a> -->
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="">Loans</a>
								<ul>
									<li><a href="home.html">Home Loan</a></li>
									<li><a href="car.html">Car Loan</a></li>
									<li><a href="personal.html">Personal Loan</a></li>
									<li><a href="business.html">Business Loan</a></li>
								

								</ul>
							</li>
							<li><a href="contact.html" class="button">Contact Us</a></li>
						</ul>
					</nav>
				</header>


			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>Contact Us</h2>
						<p>Tell us what you think about our little operation.</p>
					</header>
					<div class="box">
						<form method="post" action="#">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-mobilep">
									<input type="text" name="name" id="name" value="" placeholder="Name" />
								</div>
								<div class="col-6 col-12-mobilep">
									<input type="text" name="number" id="Number" value="" placeholder="Mobile Number" />
								</div>
								<div class="col-12">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
								<div class="col-12">
									<input type="text" name="subject" id="subject" value="" placeholder="Subject" />
								</div>
								<div class="col-12">
									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" name="submit" value="Send Message" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					
				</footer>

		</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.dropotron.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>
<?php
$servername = "secure-b.database.windows.net";
$username = "secure";
$password = "Navya@123";
$dbname = "secure-b";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

	if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // SQL query to insert data into the contact_form table
    $sql = "INSERT INTO contact (name, number, email, subject, message)
            VALUES ('$name', '$number', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>
