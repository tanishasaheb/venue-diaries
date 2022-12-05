<html>
<head>
<title>Sign Up</title>
	<link rel="stylesheet" href=sign.css>
	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script> 
function GEEKFORGEEKS()                                    
{ 
             
    var email = document.signupform.email.value;    
    var password = document.signupform.password.value;  
    var password2=document.signupform.password2.value;    
         
	var atposition=email.indexOf("@");  
	var dotposition=email.lastIndexOf(".");  
	
	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length)
	{  
  		alert("Please enter a valid e-mail address");  
  		return false;  
  	}  
 
    if (password.length<8)                        
    { 
       	alert("Password should be minimum of 8 characters"); 
        return false; 
    } 
   
   if (password != password2)
   {
   	alert("Password must be same")
   	return false;
   }
   
    return true; 
}
</script> 
</head>
<body class="b">
	<div class="signup_box">
		<form name="signupform" onsubmit="return GEEKFORGEEKS()"  action="signup.php" method="post">
		<div class="left_box">
			<h2> Sign Up </h2>
			<input type="text" name="username" placeholder="Username" required />
			<input type="text" name="email" placeholder="E-mail" required />
			<input type="password" name="password" placeholder="Password" required />
			<input type="password" name="password2" placeholder="Retype Password" required />
			<input type="submit" name="signup_button" value="Sign Up"/>
		</div>	
		</form>	
		<div class="right_box">
			<span class="signinwith"> Sign in with <br/> Social Network </span>
			<button class="social facebook"><a href=https://www.facebook.com/>Login with Facebook </button>
			<button class="social twitter"><a href=https://twitter.com/i/flow/login>Login with Twitter </button>
			<button class="social instagram"><a href=https://www.instagram.com/>Login with instagram</button>
			<center><a href="login.php">Existing user?Log-In</a></center>

		</div>
	</div>
	<div class="footer-main-div" style="margin-top:8%">
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
if(isset($_POST['signup_button']))
{
session_start();
$con =  mysqli_connect('localhost','root','','venue_diaries');
mysqli_select_db($con,'venue_diaries');

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];

$s="select * from signup where username= '$username'";

$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);
if($num == 1)
	{
		$message = "username already exists.Please click on Signup button and create account with different username";
		echo "<script type='text/javascript'>alert('$message');</script>";	
	}	
else
	{
		$reg="insert into signup(username,email,password) values ('$username','$email','$password')";
		mysqli_query($con,$reg);
		echo"Resgisteration Successful";
		header('location:login.php');
	}
}
?>