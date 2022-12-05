<!doctype html>
<html>
	<head>		
		<title>PALACES</title>
		<link rel="stylesheet" href="style2.css">
		<link rel="stylesheet" href="footer.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head> 
	<style>
		.bodyDiv{
		width: 100% !important;
    	top: 0;
    	margin-bottom: 700px !important;
		position: fixed;
		}
	</style>
	<body>
	<?php
	include('header.php');
	?>	
		<div class="container">
			<div class="box">
				<div class="imgBx">
					<img src="regal.jpg">
				</div> 
				<div class="content">
					<h2>Rigal Blu</h2>
					<p>Hotel Rigal Blu, sector 38 Chandigadh road Ludhiana 141010, India. Established in 2015. Contact no. 01614503111
				</p>
					<a href="book.php">Book Now</a>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="sid.jpg">
				</div>
				<div class="content">
					<h2>Siddhartha Resort</h2>
					<p>Siddhartha Resort, Pakhowal road, Ludhiana 141001, India. Established in 2009.Contact no.9876437372.</p>
					<a href="book.php">Book now</a>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="mah.jpg">
				</div>
				<div class="content">
					<h2>Maharaja Grand</h2>
					<p>Maharaja Grand, VP7G+J6V, Ferozpur road, Ludhiana 141001, India. Established in 1999. Contact no. 8427800501.</p>
					<a href="book.php">Book now</a>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="kingsville.jpg">
				</div>
				<div class="content">
					<h2>Kingsville</h2>
					<p>Kingsville Resort, Bhanour, Ferozpur road Ludhiana 141001, India. Established in 2010. Contact no. 9814096619.</p>
					<form action="#" method=POST>
						<button type='submit' name='book'>Book Now</button>
					</form>
				</div>
			</div>			
		</div>
	<div class="footer-main-div" style="position:fixed; bottom:0">
		<div class="footer-social-icon">
			<ul>
				<li><a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://www.instagram.com/" target="blank"><i class="fa fa-instagram"></i></a></li>
				<li><a href="https://www.youtube.com/" target="blank"><i class="fa fa-youtube"></i></a></li>
			</ul>	
		</div>

		<div class="footer-content">
			<ul>
				<li><a href="about.html" target=center>About Us</a></li>
				<li><a href="contact.html" target=center>Contact Us</a></li>
				<li><a href="terms.html">Terms and Conditions</a></li>

			</ul>	
		</div>	
	</div>
	</body>
</html>
<?php
if(isset($_POST['book'])){
	echo"<script>alert('Already booked!!!!');</script>";
}
?>