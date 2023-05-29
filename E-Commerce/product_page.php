<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="EStyle.css">
<link rel="stylesheet" href="EGrid.css">
<title>Category | Ro Purifiers</title>
	
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
	
	<div class="col span_12_of_12" align="center">
		<h1>Ro Water Purifying Machine</h1>
	</div>
	
	
	
	<div class="col span_12_of_12" align="center">
		<?php
		
		$ID=$_GET['id'];
		
		if(isset($_POST["addtocard"]))
		{
			if(isset($_SESSION["card"]))
			{
				$pid_array=array_column($_SESSION["card"],"pid");
				if(!in_array($_GET["id"],$pid_array))
				{
					$index=count($_SESSION["card"]);
					$item=array(
					'pid'=> $_GET['id'],
					'pname'=> $_POST['pname'],
					'price'=> $_POST['price'],
					'quantity'=>$_POST['quantity'],
				);
					$_SESSION["card"][$index]=$item;
					echo "<script>alert('Product Added to Card');</script>";
					header('Location:view_card.php');
					
				}
				else
				{
					echo "<script>alert('Product Already Added to Card');</script>";
				}
			}
			else
			{
				$item=array(
					'pid'=> $_GET['id'],
					'pname'=> $_POST['pname'],
					'price'=> $_POST['price'],
					'quantity'=>$_POST['quantity'],
				);
				$_SESSION["card"][0]=$item;
				echo "<script>alert('Product Added to Card');</script>";
				header('Location:view_card.php');
				
			}
		}
		
		
		if(isset($_GET["id"]))
		{
			
				$con = mysqli_connect("localhost","root","","websitedb");

							if(!$con)
							{
								die("Sorry, We are facing a Technical Issue");
							}
		    $sql = "SELECT * FROM `tblproduct` WHERE `productID`={$_GET["id"]}";
		
		
		
		        $result = mysqli_query($con,$sql);
		  		if(mysqli_num_rows($result)>0)
				{
					
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<form action='{$_SERVER['REQUEST_URI']}' method='post'>";
						echo "<table>";
						echo "<tr>";
						echo '<td align="center"><p align="center"><u><h1>'.$row['productName'].'</h1></u></p>
						<img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/></td>
						<td><p align="center">Company :'.$row['company'].'</p>
						<p align="center" class="price">Price :Rs.'.$row['price'].'</p>
						<p>Enter Quantity&nbsp;<input type="number" name="quantity" required>
						<input type="hidden" value="'.$row['productName'].'" name="pname">
						<input type="hidden" value='.$row['price'].' name="price">
						
						</p>
						
						<input type="submit" class="pbutton" name="addtocard" value="Add to Card">
						
						
						
						
						</td>';
						echo "</tr>";
						echo "</table>";
						echo "</form>";
						
						$image='<img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/>';
						
						
						echo'<form action="order_process.php" method="post">
						<br><br><br>
						Enter Quantity&nbsp;<input type="number"  name="quantity" required>
						<br><br><br>
						<input type="submit" class="buybutton" name="buynow" value="Buy Now">
						<input type="hidden" value="'.$row['productName'].'" name="pname">
						<input type="hidden" value="'.$ID.'" name="pid">
						<input type="hidden" value='.$row['price'].' name="price">
						</form>';
						
						
					}
					
					
				}
				
			
		}else
		{
			header('Location:cat_machines.php');
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