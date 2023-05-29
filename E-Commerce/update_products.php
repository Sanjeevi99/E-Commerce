<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="EStyle.css">
<link rel="stylesheet" href="samplegrid.css">
<title>ADMIN | Update Products</title>
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
			  <a href="logout.php">Sign-Out</a>
			  
			</div>
      </div>		
	  <a href="#aboutus">About Us</a>	
	  <div class="dropdown">
			<button class="dropbtn">Manage 
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			  <a href="admin_productmgt.php">Manage Products</a>
			  <a href="admin_ordermgt.php">Manage Orders</a>
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
				
				$sql = "SELECT * FROM `tblproduct` WHERE `productID`={$_GET["id"]}";
		
				$result = mysqli_query($con,$sql);
		  		if(mysqli_num_rows($result)>0)
				{
					$row = mysqli_fetch_assoc($result)
		  ?>
		  
        <td colspan="2"><h1 align="center">Product Details</h1></td>
		  <form action="up_product.php" method="post" enctype="multipart/form-data">
      </tr>
      
		<tr>
        <td>Product Name</td>
        <td><input type="text" name="txtproductName" id="txtproductName" value="<?php echo $row['productName'];?>" ></td>
      </tr>
		<tr>
        <td>Category ID</td>
        <td><input type="text" name="txtcategoryID" id="txtcategoryID" value="<?php echo $row['categoryID']; ?>" ></td>
      </tr>
      <tr>
        <td>Price</td>
        <td><input type="text" name="txtprice" id="txtprice" value="<?php echo $row['price']; ?>" ></td>
      </tr>
		<tr>
        <td>Company</td>
        <td><input type="text" name="txtcompany" id="txtcompany" value="<?php echo $row['company']; ?>" ></td>
			<td><input type="hidden" name="txtproductid" id="txtproductid" value="<?php echo $row['productID']; ?>" ></td>
      </tr>
      <tr>
        <td>Image</td>
        <td> <?php echo ' <img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" width="200px" height="150px"/>' ?></td>
      </tr>
      
      
		
      <tr>
        <td>&nbsp;</td>
        <td>
					
          
          <p>
            <input type="submit" name="btnSubmit" id="btnSumbit" class="pbutton" value="Update">
          </p>
			<br>
			
			
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
