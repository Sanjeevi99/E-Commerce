<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="EStyle.css">
<link rel="stylesheet" href="samplegrid.css">
<title>S.K.Agency | Home</title>
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
			  <a href="view_order.php">My Orders</a>
			  <a href="account.php">My Account</a>	
			  <a href="logout.php">Sign-Out</a>
			  
			</div>
      </div>		
	  <a href="aboutus.php">About Us</a>	
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
		<img class="responsive"  src="home_banner.jpg" alt="Banner">
	</div>
	
	
	
	
	
	<div class="col span_3_of_12 con" >
		<div class="card">
			  <img src="ro_filter1.jpg" alt="Ro Filter 1" style="width:100%">
			  <h1>Ro Water Purifier</h1>
			  <p class="price">An Advanced RO Water Purifier.</p>
              <a href="cat_machines.php"><p><button>View Similar Products</button></p></a>
			  
		</div>
		
	</div>
	<div class="col span_3_of_12 con" >
		<div class="card">
			  <img src="Product_Images/Vontron 100GPD.jpg" alt="Ro membrane" style="width:100%">
			<br><br><br><br><br>
			  <h1>Vontron 100 GPD Membrane</h1>
			  <p class="price">Best Membrane Layers to filter the water.</p>
			  <a href="cat_mambrane.php"><p><button>View Similar Products</button></p></a>
		</div>
		
	</div>
	<div class="col span_3_of_12" align="center">
		<div class="card">
			  <img src="Product_Images/Kemflo Ro Pumb 100GPD.jpg" alt="boosterpump" style="width:100%">
			<br><br><br><br><br>
			
			  <h1>Booster Pump 100 GPD</h1>
			  <p class="price">Advance Pumping Mechanism to Pump Water.</p>
			  <a href="cat_boosterpump.php"><p><button>View Similar Products</button></p></a>
		</div>
	</div>
	
	<div class="col span_3_of_12" align="center">
		<div class="card">
			  <img src="Product_Images/PH Meter.jpg" alt="ph meter" style="width:100%">
			<br><br><br><br><br><br><br><br><br><br><br>
			  <h1>PH Meter</h1>
			  <p class="price">Easily Find PH Levels of your Drinking Water.</p>
			  <a href="cat_otheraccess.php"><p><button>View Similar Products</button></p></a>
		</div>
	</div>
	
	<div class="col span_12_of_12">
		<img class="responsive"  src="offer.jpg" alt="Offer">
	</div>	
	
	
	
	
	
		
	
	
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
