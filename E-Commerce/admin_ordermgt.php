<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="EStyle.css">
<link rel="stylesheet" href="EGrid.css">
<title>ADMIN | Order Management</title>
	
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
			<button class="dropbtn"><?php echo "Hi ! ".$_SESSION['admin'];?> 
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			  <a href="logout.php">Sign-Out</a>
			  
			</div>
      </div>		
	  
	  <div class="dropdown">
			<button class="dropbtn">Manage 
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			  <a href="admin_productmgt.php">Manage Products</a>
			  <a href="admin_ordermgt.php">Manage Orders</a>
			</div>
      </div>
	  
	  <a href="admin_customers.php">Customer Details</a>	
	  
		
	  <div class="logo">
		  <a href="#home">S.K.Agency</a>
	  </div>
		
	  
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	  <i class="fa fa-bars"></i>
      </a>
    </div>
	
	<div class="col span_12_of_12" align="center">
		<h1>Orders Management</h1>
	</div>
	
	
	
	<div class="col span_12_of_12" align="center">
		<table align="center" border="1">
	<tr width="200px" height="40px">
		<th width="100px"><b><u><h3>Order ID</h3></u></b></th>
		<th width="100px"><b><u><h3>Customer Name</h3></u></b></th>
		<th width="200px"><b><u><h3>Product Name</h3></u></b></th>
		<th width="100px"><b><u><h3>Quantity</h3></u></b></th>
		<th width="200px"><b><u><h3>Price</h3></u></b></th>
		<th width="200px"><b><u><h3>Payment</h3></u></b></th>
		<th width="150px"><b><u><h3>Date</h3></u></b></th>
		<th width="150px"><b><u><h3>District</h3></u></b></th>
		<th width="150px"><b><u><h3>Status</h3></u></b></th>
		<th width="150px"><b><u><h3>Actions</h3></u></b></th>
	</tr>
		<?php
		
			$con = mysqli_connect("localhost","root","","websitedb");

							if(!$con)
							{
								die("Sorry, We are facing a Technical Issue");
							}
		    $sql = "SELECT * FROM `tblorder` ";
		    
		    	 
		
		
		        $result = mysqli_query($con,$sql);
		  		if(mysqli_num_rows($result)>0)
				{
					
					while($row = mysqli_fetch_assoc($result))
					{
						
						
							echo '<table align="center" border="0.1">
						 <tr width="200px" height="40px">
						    <td align="center" width="100px">'.$row['orderID'].'</td>
						 	<td align="center" width="100px">'.$row['customerLastName'].'</td>
							<td align="center" width="200px">'.$row['productName'].'</td>
							<td align="center" width="100px">'.$row['quantity'].'</td>
							<td align="center" width="200px">Rs.'.$row['price'].'</td>
							<td align="center" width="200px">'.$row['payment'].'</td>
							<td align="center" width="150px">'.$row['date'].'</td>
							<td align="center" width="150px">'.$row['district'].'</td>
							<td align="center" width="150px">'.$row['status'].'</td>
							<td align="center" width="150px"><a href="update_orders.php?id='.$row['orderID'].'"><p><button class="pbutton">Update</button></p></a>
							
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