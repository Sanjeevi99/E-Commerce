<?php


$con = mysqli_connect("localhost","root","","websitedb");
		
					if(!$con)
					{
						die("Sorry, We are facing a Technical Issue");
					}


                $delete_id = $_POST["product_id"];
				if(isset($_POST["delete"]))
				{
 				
					$sql="DELETE FROM `tblproduct` WHERE `productID`='$delete_id'";
					 mysqli_query($con,$sql);
					mysqli_close($con);
					header('location:admin_productmgt.php');
		
 				}
			
			
			?>