<?php session_start();
if(!isset($_SESSION['username']))
{
	header('Location:login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="EStyle.css">
<link rel="stylesheet" href="samplegrid.css">
<title>S.K.Agency | Account</title>
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
	  <a href="#aboutus">About Us</a>	
	  <a href="#account">Account</a>
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
		
	<table class="Reg" width="475" height="525" border="0" align="center">
    <tbody>
      <tr>
		  <?php
		  $con = mysqli_connect("localhost","root","","websitedb");
		
		    if(!$con)
			{
				die("Sorry, We are facing a Technical Issue");
			}
				
				$sql = "SELECT * FROM `tblcustomer` WHERE `email`='".$_SESSION['username']."'";
		
				$result = mysqli_query($con,$sql);
		  		if(mysqli_num_rows($result)>0)
				{
					$row = mysqli_fetch_assoc($result)
		  ?>
		  
        <td colspan="2"><h1 align="center">Account Details</h1></td>
		  <form action="update_account.php" method="post" enctype="multipart/form-data">;
      </tr>
      
		<tr>
        <td>First Name</td>
        <td><input type="text" name="txtFirstName" id="txtFirstName" value="<?php echo $row['firstName'];?>" ></td>
      </tr>
		<tr>
        <td>Last Name</td>
        <td><input type="text" name="txtLastName" id="txtLastName" value="<?php echo $row['lastName']; ?>" ></td>
      </tr>
      <tr>
        <td>Email Address</td>
        <td><input type="text" name="txtEmailAddress" id="txtEmailAddress" value="<?php echo $row['email']; ?>" ></td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td><input type="text" name="txtContact" id="txtContact" value="<?php echo $row['contactNumber']; ?>"></td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td><input type="Date" name="txtBday" id="txtBday" value="<?php echo $row['DOB']; ?>"></td>
      </tr>
      <tr>
        <td>District</td>
        <td><input type="text" name="txtDistrict" id="txtDistrict" value="<?php echo $row['district']; ?>"></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><textarea name="txtAddress" id="txtAddress" cols="45" rows="5" value="<?php echo $row['address']; ?>"></textarea></td>
      </tr>
      <tr>
        <td>NIC Number</td>
        <td><input type="text" name="txtNIC" id="txtNIC" pattern="[0-9]{9}[Vv]" value="<?php echo $row['NIC']; ?>" ></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="txtPassword" id="txtPassword" value="<?php echo $row['password']; ?>"></td>
      </tr>
      
		
      <tr>
        <td>&nbsp;</td>
        <td>
					
          
          <p>
            <input type="submit" name="btnSubmit" id="btnSumbit" class="pbutton" value="Update">
          </p>
			<br>
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

						$sql = "UPDATE `tblcustomer` SET `firstName` = '".$firstName."', `lastName` = '".$lastName."', `email` = '".$email."', `contactNumber` = '".$contactNumber."', `DOB` = '".$dob."', `district` = '".$district."', `address` = '".$address."',`password` = '".$password."' WHERE `tblcustomer`.`email` ='".$_SESSION['username']."';";

						if(mysqli_query($con,$sql))
						{
							echo "Account Updated Successfully";
							header('Location:account.php');
						}
						else{
							
							echo "Opps !!! , Something Wrong Please Re-try...";
						}
					
				}
					
			
			?>
			
        </td>
      </tr>
		<?php }
		  
		  ?>
    </tbody> 
  </table>
		
	</div>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
