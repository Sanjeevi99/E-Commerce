<?php session_start(); 
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="EStyle.css">
<link rel="stylesheet" href="samplegrid.css">
<title>S.K.Agency | Order Process</title>
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
	  <div class="dropdown">
			<button class="dropbtn"><?php echo "Hi ! ".$_SESSION['user'];?> 
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			  <a href="view_card.php">My Card</a>
			  <a href="#">My Orders</a>
			  <a href="account.php">My Account</a>	
			  <a href="logout.php">Sign-Out</a>
			  
			</div>
      </div>		
	  <a href="#aboutus">About Us</a>	
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
	  
	  <a href="Inner_Home.php">Home</a>	
	  
		
	  <div class="logo">
		  <a href="#home">S.K.Agency</a>
	  </div>
		
	  
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	  <i class="fa fa-bars"></i>
      </a>
    </div>
	
	<h1 align="center">Order Detail</h1>
	<table align="center" border="1">
	<tr width="200px" height="40px">
		<th width="200px"><b>Item Name</b></th>
		<th width="100px"><b>Quantity</b></th>
		<th width="200px"><b>Total Price</b></th>
		
	</tr>
		
		<?php
		
				
				$pid= $_POST['pid'];
				$pname= $_POST['pname'];
				$price= $_POST['price'];
				$quantity=$_POST['quantity'];
		
		$total = $price*$quantity;
		
		echo '<table align="center" border="1">
			 <tr width="200px" height="40px">
				<th align="center" width="200px"><h3>'.$pname.'</h3></th>
				<th width="100px"><h3>'.$quantity.'</h3></th>
				<th width="200px"><h3>'.$total.'</h3></th>		
	</tr>
	</table>'
		?>
		
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
		 <table align="center"> 
        <td colspan="2"><h1 align="center">Customer Detail</h1></td>
		  
      </tr>
      
		<tr>
        <td><b>First Name</b></td>
        <td><?php echo $row['firstName'];?></td>
      </tr>
		<tr>
        <td><b>Last Name</b></td>
        <td><?php echo $row['lastName']; ?></td>
      </tr>
      <tr>
        <td><b>Email Address</b></td>
        <td><?php echo $row['email']; ?></td>
      </tr>
      <tr>
        <td><b>Contact Number </b></td>
        <td><?php echo $row['contactNumber']; ?></td>
      </tr>
      
      <tr>
        <td><b>District</b></td>
        <td><?php echo $row['district']; ?></td>
      </tr>
      <tr>
        <td><b>Address</b></td>
        <td><textarea name="txtAddress" id="txtAddress" cols="45" rows="5"><?php echo $row['address']; ?></textarea></td>
		  
      </tr>
			 
      
      <tr>
        <td>&nbsp;</td>
		  
        <td>
			<?php }
		  
		  
		  ?>
					
          
          <p>
			  <?php
			date_default_timezone_set('Asia/Kolkata');
            $date = date('d-m-y');
			$time =	date('h:i:s');	
					
		  echo '<form action="pcode.php" method="post">
		  <label for="payment"><b>Select a Payment Method:</b></label>
						  <select name="payment" id="payment">
							<option value="Master">Master</option>
							<option value="Visa">Visa</option>
							<option value="Paypal">Paypal</option>
							<option value="Cash-on-Delivey">Cash on Delivey</option>
						  </select><br><br><br>
		  <input type="hidden" value="'.$pid.'" name="pid">
		  <input type="hidden" value="'.$pname.'" name="pname">
		  <input type="hidden" value="'.$_SESSION['cid'].'" name="cid">
		  <input type="hidden" value="'.$quantity.'" name="quantity">
		  <input type="hidden" value="'.$total.'" name="total">
		  <input type="hidden" value="'.$date.'" name="date">
		  <input type="hidden" value="'.$time.'" name="time">
		  <input type="hidden" value="'.$row['lastName'].'" name="customerLastName">
		  <input type="hidden" value="'.$row['district'].'" name="district">
		  <input type="submit" name="placeorder"  class="pbutton" value="Place Order">  
		  </form>
		  
		  ';
					
					
		  ?>	  
            
          </p>
			<br>
			
			
        </td>
      </tr>
		
		
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	
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
