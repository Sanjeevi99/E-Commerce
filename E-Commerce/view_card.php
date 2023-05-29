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
<title>S.K.Agency | My Card</title>
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
	
	<?php
		/*echo "<pre>";
		print_r($_SESSION["card"]);
		echo "</pre>";*/
	
	?>
	<table align="center" border="1">
	<tr width="200px" height="50px">
		<th><b><h3>Item Name</h3></b></th>
		<th><b><h3>Quantity</h3></b></th>
		<th><b><h3>Price</h3></b></th>
		<th><b><h3>Total</h3></b></th>
		<th><b><h3>Remove</h3></b></th>
	</tr>
		<?php
		if(isset($_GET["del"]))
		{
			foreach($_SESSION["card"] as $keys=>$values)
			{
				if($values["pid"]==$_GET["del"])
				{
					unset($_SESSION["card"][$keys]);
				}
			}
		}
		
			if(!empty($_SESSION["card"]))
			{
				$total=0;
				foreach($_SESSION["card"] as $keys=>$values)
				{
					$amount = $values["quantity"]*$values["price"];
					$total+=$amount;
					echo "
						<tr>
							<td align='center' width='200px' height='50px'>{$values["pname"]}</td>
							<td align='center' width='200px' height='50px'>{$values["quantity"]}</td>
							<td align='center' width='200px' height='50px'>{$values["price"]}</td>
							<td align='center' width='200px' height='50px'>$amount</td>
							<td align='center' width='200px' height='50px'><a href='view_card.php?del={$values["pid"]}'>Remove</td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
					";
				}
				
				echo "
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td align='center' width='100px' height='40px'>Total</td>
								<td align='center' width='100px' height='40px'>{$total}</td>
							</tr>
				
				";	
			}
		else
		{
			echo "<script>alert('No Products in the Card')</script>";
			header("location:cat_machines.php");
		}
		
		
		?>
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
