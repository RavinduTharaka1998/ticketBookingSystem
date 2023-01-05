<?php
	include_once '../connection.php';
			
			if(!empty($_POST["email"])){

				
				
				$query = "SELECT * FROM user WHERE email = '".$_POST["email"]."'";
				$result = mysqli_query($conn,$query);
				$count = mysqli_num_rows($result);
				
				if($count>0){
					
					echo"<span style = 'color:red; font-weight:bold'>email is not available</span>";
				    echo"<script>$('#sign_up').prop('disable',true);</script>";
				}
				else{
					
					echo"<span style = 'color:green; font-weight:bold'>email is available</span>";
				    echo"<script>$('#sign_up').prop('disable',true);</script>";
				}
			}else{
				echo"<span style = 'color:blue'>email is empty</span>";
			}
?>