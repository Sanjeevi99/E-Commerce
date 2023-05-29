<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="EStyle.css">
<link rel="stylesheet" href="EGrid.css">
<title>ADMIN | Products Management</title>
	
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
		<h1>Products Management</h1>
	</div>
	<?php
	
		echo '<table align="center">
						 <tr><td width="200px" height="40px"><a href="add_products.php"><p><button class="pbutton">Add a New Product</button></p></a></td></tr>
				</table>';	
	
	?>
	
	<!--<div class="col span_12_of_12" align="center">
	<form action="admin_productmgt.php" method="post">	
	<label for="sor" ><b>Select Category ID:</b></label>
						  <select name="sor" id="sor">
							<option value="All">All</option>
							<option value="1">Category 1</option>
							<option value="2">Category 2</option>
							<option value="3">Category 3</option>
							<option value="4">Category 4</option>
							  <br><br><br>
							<input type="submit" class="buybutton" name="sort" value="Sort">
						  </select>
	</form>	
	</div>	-->
	
	
	<div class="col span_12_of_12" align="center">
		<table align="center" border="1">
	<tr width="200px" height="40px">
		<th width="200px"><b><u><h3>Product Image</h3></u></b></th>
		<th width="200px"><b><u><h3>Product Name</h3></u></b></th>
		<th width="100px"><b><u><h3>Category ID</h3></u></b></th>
		<th width="200px"><b><u><h3>Price</h3></u></b></th>
		<th width="200px"><b><u><h3>Company</h3></u></b></th>
		<th width="200px"><b><u><h3>Actions</h3></u></b></th>
	</tr>
		<?php
		
			$con = mysqli_connect("localhost","root","","websitedb");

							if(!$con)
							{
								die("Sorry, We are facing a Technical Issue");
							}
			/*
			$sor=$_POST['sor'];
		    if($sor =="All")
			{
				$sql = "SELECT * FROM `tblproduct` ";
			}
			else{
				
				$sql = "SELECT * FROM `tblproduct` WHERE `categoryID`='".$sor."'";
			}
			*/
		    
		    	 
				$sql = "SELECT * FROM `tblproduct` ";
		
		        $result = mysqli_query($con,$sql);
		  		if(mysqli_num_rows($result)>0)
				{
					
					while($row = mysqli_fetch_assoc($result))
					{
						
						
							echo '<table align="center" border="1">
						 <tr width="200px" height="40px">
						    <th width="200px"><img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" width="200px" height="150px"/></th>
							<th align="center" width="200px">'.$row['productName'].'</th>
							<th width="100px">'.$row['categoryID'].'</th>
							<th width="200px">Rs.'.$row['price'].'</th>
							<th width="200px">'.$row['company'].'</th>
							<th width="200px"><a href="update_products.php?id='.$row['productID'].'"><p><button class="pbutton">Update</button></p></a>
							<form action="delete.php" method="post">
							<input type="hidden" name="product_id" value= '.$row['productID'].'>
							<input type="submit" class="buybutton" name="delete" value="Delete"></th>
							</form>
							
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