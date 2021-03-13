<?php
require('db_connect.php');
if (isset($_GET['Case_number'])) {
			$Case_number=$_GET['Case_number'];

			$sql="DELETE FROM tbl_records WHERE Case_number=$Case_number";
			if(mysqli_query($connectivity,$sql)){
				if (isset($_POST['insert_record'])) {
		
							$Lastname=$_POST['Lastname'];
							$Firstname=$_POST['Firstname'];
							$Middlename=$_POST['Middlename'];

							$Database="INSERT INTO tbl_found(Lastname,Firstname,Middlename,Date_found)VALUES('$Lastname','$Firstname','$Middlename',)";
							if(mysqli_query($connectivity,$Database)){
								echo '<script type="text/javascript">alert("Data was successfully recorded!");</script>';	
							}
							else{
								echo '<script type="text/javascript">alert("!! May be SQL query wrong");</script>';
							}
						
					
				}
				header('location:view_records.php');
			}
			else{
				mysqli_error($connectivity);
			}
			
		}

?>