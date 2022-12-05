<html>
<head>
<style>


.bodyDiv
{
	margin:0;
	padding:0;
	background:#f1f1f1;
}
.navigation
{
	background:black;
	overflow:auto;
	width:100%;
	margin-top:0px;
    
}
.menu-ul
{
	padding:18;
	margin:0;
}
 
.header-li
{
	margin-left:20;
	list-style:none;
	float:left;
}

.headerAnc
{
	width:100px;
	display:block;
	padding:20px 20px;
	color:white;
	text-align:center;
	font-family:Century Gothic;
	font-size:15px;
	text-decoration:none;
	text-transform:uppercase;
	font-weight:bold;
}

.headerAnc:hover
{ 	
	background:white;
	color:black;
}
 
.headerInput[type=text]
{
	width:150px;
	border:none;
	border-radius:18px;
	outline:none;
	padding:12px;
	transition:width 0.6s ease-in-out;
	-moz-transition:width 0.6s ease-in-out;
	-webkit-transition:width 0.6s ease-in-out;
	margin:11px 5px 0 5px;
}

.headerInput[type=text]:focus
{
	width:300px;
}

</style>
</head>
<body>
	<div class="bodyDiv">
	<nav class="navigation">
	
		<ul class="menu-ul">
			<li class="header-li"><img src="bird.png" width="280" height="79"></li>
			<li class="header-li"><a class="headerAnc" href="home.php" target=center> Home</a></li>
			<li class="header-li"><a class="headerAnc" href="index2.php" target=center> services</a></li>
			<form>
				<li class="header-li"><input class="headerInput" type="text" placeholder="search here"></li>
				<li class="header-li"><a class="headerAnc" href="login.php" target=center> login</a></li>
				<li class="header-li"><a class="headerAnc" href="signup.php" target=center> sign in</a></li>
			</form>
		</ul>
	
	</nav>
	</div>
	
	
</body>
</html>