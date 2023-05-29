<?php
	if(isset($_POST["placeorder"]))
					{
						  $pid=$_POST['pid'];
						  $pname=$_POST['pname'];
						  $cid=$_POST['cid'];
						  $quantity=$_POST['quantity'];
						  $total=$_POST['total'];
						  $status="Order Received";
						  $date=$_POST['date'];
						  $time=$_POST['time'];
						  $payment=$_POST['payment'];
						  $cusLastName=$_POST['customerLastName'];
						  $district=$_POST['district'];
		
						$con = mysqli_connect("localhost","root","","websitedb");
		
					if(!$con)
					{
						die("Sorry, We are facing a Technical Issue");
					}
						
						
						
						$sql = "INSERT INTO `tblorder` (`orderID`, `customerID`, `productID`, `quantity`, `price`, `status`, `date`, `time`,`productName`,`payment`,`customerLastName`,`district`) VALUES (NULL, '".$cid."', '".$pid."', '".$quantity."', '".$total."', '".$status."', '".$date."', '".$time."','".$pname."','".$payment."','".$cusLastName."','".$district."');";
						
						
				if(mysqli_query($con,$sql))
						{
							
							header('Location:succ_order.php');
						}
						else{
							
							echo "Opps !!! , Something Wrong Please Re-try...";
						}
			
				mysqli_close($con);
				
					}

?>