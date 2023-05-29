<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="EStyle.css">
<link rel="stylesheet" href="EGrid.css">
<title>S.K.Agency | Login</title>
	
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
	  <a href="#login">Login</a>
	  <a href="aboutus.html">About Us</a>	
	  <div class="dropdown">
			<button class="dropbtn">Category 
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			  <a href="cat_machines.php">Ro Purifier</a>
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
		<h4>"We Provide you Quality Water"</h4>
	</div>
	
	
	
	<div class="col span_12_of_12" align="center">
		
			<form name="form1" method="post" action="">
			<table class="TransBox"  border="0" align="center">
			<tbody>
			  <tr>
				<td colspan="2"><h1 align="center">Login</h1></td>
			  </tr>
				<br>
			  <tr>
				<td width="137" align="center" class="text"><b>Email</b></td><br>
				<td width="291" height="100" align="center"><input type="text" name="txtEmail" id="txtEmail" required placeholder="Email Address" autofocus="on"></td><br>
			  </tr>
			  <tr>
				<td align="center" class="text"><b>Password</b></td><br>
				<td align="center"><input type="password" name="txtPassword" id="txtPassword" required autocomplete="off" placeholder="Password"><br>
			  </tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
				
			  
			  <tr>
					<td>&nbsp;</td>
				    
					<td align="center"><input type="submit" name="btnSubmit" class="loginbutton" id="btnSubmit" value="Login" >
					</td>
				  <tr><td align="center"><h4>New User ?</h4></td><td align="center"><a href="register.php">Create Account Now !</a></td></tr>
		      </tr>
				
				<?php
						if(isset($_POST["btnSubmit"]))
						{
							$username = $_POST['txtEmail'];
							$pass = $_POST['txtPassword'];
							
							if($username=="Admin" && $pass=="admin")
							{
								$_SESSION['admin'] = $username;
								header('Location:admin_customers.php');
								
								
							}
							
							

							$con = mysqli_connect("localhost","root","","websitedb");

							if(!$con)
							{
								die("Sorry, We are facing a Technical Issue");
							}

							$sql = "SELECT * FROM `tblcustomer` WHERE `email`='".$username."' AND `password`='".$pass."';";

							$results = mysqli_query($con,$sql);
							

     						$row = mysqli_fetch_assoc($results);
							
							if(mysqli_num_rows($results)>0)
							{
								
								$_SESSION['username'] = $username;
								$_SESSION['user'] = $row['lastName'];
								$_SESSION['cid'] = $row['customerID'];
								
								header('Location:Inner_Home.php');


							}
							else
							{
								echo("ERROR ! Please Enter Correct Email and Password.");
							}
						}
                  ?>
				
		   </tbody> 
		  </table>
		</form>		
	<br><br><br><br>
	</div>
	
	
	
	
	
	
	
	        <footer class="footer">
			<div class="l-footer">
			<h1>
			S.K Agency
			</h1>
			<p>
			We provide better solution for your drinking water.</p>
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