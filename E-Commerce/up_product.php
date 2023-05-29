<?php
				if(isset($_POST["btnSubmit"]))
				{
					$pid = $_POST["txtproductid"];
					$pname = $_POST["txtproductName"];
					$cat_id = $_POST["txtcategoryID"];
					$price = $_POST["txtprice"];
					$company = $_POST["txtcompany"];
					
					
					
					$con = mysqli_connect("localhost","root","","websitedb");
		
					if(!$con)
					{
						die("Sorry, We are facing a Technical Issue");
					}

						$sql = "UPDATE `tblproduct` SET `productName` = '".$pname."', `categoryID` = '".$cat_id."', `price` = '".$price."', `company` = '".$company."' WHERE `productID` ={$pid};";

						if(mysqli_query($con,$sql))
						{
							echo "Product Updated Successfully";
							header('Location:admin_productmgt.php');
						}
						else{
							
							echo "Opps !!! , Something Wrong Please Re-try...";
						}
					
				}
					
			
			?>