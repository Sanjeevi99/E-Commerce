<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="EStyle.css">
<link rel="stylesheet" href="samplegrid.css">
<title>S.K Agency | Register Customer</title>
	<!-- Code for Responsive NavBar --> 
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
</head>

<body>
	<div class="topnav" id="myTopnav">
	  <a href="login.php">Login</a>
	  <a href="aboutus.html">About Us</a>	
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
	  <a href="#home">Home</a>	

	  <div class="logo">
		  <a href="#home">S.K.Agency</a>
	  </div>
		
	  
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	  <i class="fa fa-bars"></i>
      </a>
    </div>
	
<div class="col span_12_of_12">
	<form action="" method="post">
	
  <table class="Reg" width="475" height="525" border="0" align="right">
    <tbody>
      <tr>
        <td colspan="2"><h1 align="center">Register Account</h1></td>
      </tr>
      
		<tr>
        <td>First Name</td>
        <td><input type="text" name="txtFirstName" id="txtFirstName" required placeholder="First Name" autofocus="on"></td>
      </tr>
		<tr>
        <td>Last Name</td>
        <td><input type="text" name="txtLastName" id="txtLastName" required placeholder="Last Name"></td>
      </tr>
      <tr>
        <td>Email Address</td>
        <td><input type="text" name="txtEmailAddress" id="txtEmailAddress" required></td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td><input type="text" name="txtContact" id="txtContact" required></td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td><input type="Date" name="txtBday" id="txtBday"></td>
      </tr>
      <tr>
        <td>District</td>
        <td><input type="text" name="txtDistrict" id="txtDistrict" required></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><textarea name="txtAddress" id="txtAddress" cols="45" rows="5" required></textarea></td>
      </tr>
      <tr>
        <td>NIC Number</td>
        <td><input type="text" name="txtNIC" id="txtNIC" pattern="[0-9]{9}[Vv]"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="txtPassword" id="txtPassword" required autocomplete="off"></td>
      </tr>
      <tr>
        <td>Confirm Password</td>
        <td><input type="password" name="txtConfirmPassword" id="txtConfirmPassword" required autocomplete="off"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit">
        <input type="reset" name="btnReset" id="btnReset" value="Reset"></td>
      </tr>
    </tbody> 
  </table>
</form>
</div>	
</body>
	<?php
		if(isset($_POST["btnSubmit"]))
		{
			$firstName = $_POST["txtFirstName"];
			$lastName = $_POST["txtLastName"];
			$email = $_POST["txtEmailAddress"];
			$contactNumber = $_POST["txtContact"];
			$dob = $_POST["txtBday"];
			$district = $_POST["txtDistrict"];
			$address = $_POST["txtAddress"];
			$nic = $_POST["txtNIC"];
			$password = $_POST["txtPassword"];
			
			
			
			
			$con = mysqli_connect("localhost","root","","websitedb");
		
		    if(!$con)
			{
				die("Sorry, We are facing a Technical Issue");
			}
		
				$sql = "INSERT INTO `tblcustomer` (`customerID`, `firstName`, `lastName`, `email`, `contactNumber`, `DOB`, `district`, `address`, `NIC`, `password`) VALUES (NULL, '".$firstName."', '".$lastName."', '".$email."', '".$contactNumber."', '".$dob."', '".$district."', '".$address."', '".$nic."', '".$password."');";
		
				mysqli_query($con,$sql);
			
				mysqli_close($con);
				header('Location:succ_reg.php');	
		}
	
	?>
	
	
	
	
	
	
			<footer class="footer">
			<div class="l-footer">
			<h1>S.K Agency</h1>
			<p>
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
