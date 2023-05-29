<?php
				if(isset($_POST["btnSubmit"]))
				{
					$orderid = $_POST["txtorderid"];
					$status = $_POST["status"];
					
					
					
					
					$con = mysqli_connect("localhost","root","","websitedb");
		
					if(!$con)
					{
						die("Sorry, We are facing a Technical Issue");
					}

						$sql = "UPDATE `tblorder` SET `status` = '".$status."' WHERE `orderID` ={$orderid};";

						if(mysqli_query($con,$sql))
						{
							echo "Order Updated Successfully";
							header('Location:admin_ordermgt.php');
						}
						else{
							
							echo "Opps !!! , Something Wrong Please Re-try...";
						}
					
				}
					
			
			?>