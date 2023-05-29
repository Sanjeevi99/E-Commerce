<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="EStyle.css">
<link rel="stylesheet" href="samplegrid.css">
<title>Registration Alret</title>
	<script>
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
			x.className += " responsive";
		  } else {
			x.className = "topnav";
		  }
		}
</script>
<style>
.alert {
  padding: 20px;
  background-color:rgba(154,242,169,1.00);
  color: gray;
  border-radius: 7px;
}

</style>
</head>

<body>
	<div class="topnav" id="myTopnav">
	  <a href="#login">Login</a>
	  <a href="#aboutus">About Us</a>	
	  <a href="account.php">Account</a>
	  <div class="dropdown">
			<button class="dropbtn">Category 
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			  <a href="#">Ro Purifier</a>
			  <a href="#">Ro Membranes</a>
			  <a href="#">Ro Booster Pumps</a>
			  <a href="#">Other Accessories</a>	
			</div>
      </div>
	  <a href="home.html">Home</a>	
	  
		
	  <div class="logo">
		  <a href="#home">S.K.Agency</a>
	  </div>
		
	  
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	  <i class="fa fa-bars"></i>
      </a>
    </div>
	
	
	
	<div class="col span_12_of_12" align="center">
		
		<div class="alert">
			  
			  <strong>Success. </strong> Order placed Sucessfully.
			
			</div>
    </div>
	<div class="col span_12_of_12" align="center">
		<form action="" method="post">
		 	<input type="submit" name="btnSubmit" id="btnSubmit" class="pbutton" value="OK">
		</form>	
	</div>
	
	<div class="col span_12_of_12" align="center">
		&nbsp;
	</div>
	<div class="col span_12_of_12" align="center">
		&nbsp;
	</div>
	<div class="col span_12_of_12" align="center">
		&nbsp;
	</div>
	<?php
		if(isset($_POST["btnSubmit"]))
		{
			header('Location:Inner_home.php');
		}
	?>
	
	
	
	
	
	
			<footer class="footer">
			<div class="l-footer">
			<h1>S.K Agency</h1>
			
			<p align="center">
			We provide a better solution for your drinking water.</p>
			</div>
			<ul class="r-footer">
			<li>
			  <h2>
			Social</h2>
			<ul class="box">
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Instagram</a></li>
			<li><a href="#">Youtube</a></li>
			</ul>
			</li>
			<li class="features">
			  <h2>
			Navigation</h2>
			<ul class="box h-box">
			<li><a href="#">Home</a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
			</ul>
			</li>

			</ul>
			<div class="b-footer">
			<p>
			All rights reserved by ©S.K Agency 2021 </p>
			</div>
			</footer>
		
</body>
</html>
