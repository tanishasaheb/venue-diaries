<html>
<head>
<title>login form</title>
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
	<form action="login.php" method="post">
		<div class="loginbox">
		<h2>Login Here</h2>
		<form>
		<p>Username</p>
		<input type="text" name="username" placeholder="Enter Username" required />
		<p>Password</p>
		<input type="password" name="password" placeholder="Enter Password" required />
		<br>

		<br>
		<input type="submit" name=b1 value="Login">
		</form>
		</div>

	</form>
</div>
<div class="footer-main-div" style="margin-top:17%" >
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
if(isset($_POST['b1']))
{
session_start();


$con =  mysqli_connect('localhost','root','');
mysqli_select_db($con,'venue_diaries');

$username=$_POST['username'];
$password=$_POST['password'];


$s="select username,password from signup where username= '$username' and password='$password'";

$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num>0)
	{		
		header('location:home.php');		
	}	

else
	{
		$message = "Username or Password is incorrect.Please try again by clicking on Login button";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
?>