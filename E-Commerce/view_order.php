<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="EStyle.css">
<link rel="stylesheet" href="EGrid.css">
<title>S.K Agency | My Orders</title>
	
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
			  <a href="#">My Card</a>
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
			  <a href="cat_mambrane.php">Ro Membranes</a>
			  <a href="cat_boosterpump.php">Ro Booster Pumps</a>
			  <a href="cat_otheraccess.php">Other Accessories</a>	
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
	
	<div class="col span_12_of_12" align="center">
		<h1>My Orders</h1>
	</div>
	
	
	<div class="col span_12_of_12" align="center">
		<table align="center" border="1">
	<tr width="200px" height="40px">
		<th width="200px"><b><u><h3>Product Name</h3></u></b></th>
		<th width="100px"><b><u><h3>Quantity</h3></u></b></th>
		<th width="200px"><b><u><h3>Price</h3></u></b></th>
		<th width="200px"><b><u><h3>Status</h3></u></b></th>
		<th width="200px"><b><u><h3>Date</h3></u></b></th>
		<th width="200px"><b><u><h3>Time</h3></u></b></th>
		<th width="200px"><b><u><h3>Payment Type</h3></u></b></th>
		
	</tr>
		<?php
		
			$con = mysqli_connect("localhost","root","","websitedb");

							if(!$con)
							{
								die("Sorry, We are facing a Technical Issue");
							}
		    $sql = "SELECT * FROM `tblorder` WHERE `customerID`='".$_SESSION['cid']."'";
		    
		
		
		
		        $result = mysqli_query($con,$sql);
		  		if(mysqli_num_rows($result)>0)
				{
					
					while($row = mysqli_fetch_assoc($result))
					{
						
						
							echo '<table align="center" border="1">
						 <tr width="200px" height="40px">
							<th align="center" width="200px">'.$row['productName'].'</th>
							<th width="100px">'.$row['quantity'].'</th>
							<th width="200px">'.$row['price'].'</th>
							<th width="200px">'.$row['status'].'</th>
							<th width="200px">'.$row['date'].'</th>
							<th width="200px">'.$row['time'].'</th>
							<th width="200px">'.$row['payment'].'</th>
						</tr>
						</table>';
						
						
						
						
						
					}
					
					
				}
						
				
		
		?>
		
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