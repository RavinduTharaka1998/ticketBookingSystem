<?php
	include_once '../connection.php';
			
			if(!empty($_POST["username"])){

				
				
				$query = "SELECT * FROM user WHERE username = '".$_POST["username"]."'";
				$result = mysqli_query($conn,$query);
				$count = mysqli_num_rows($result);
				
				if($count>0){
					
					echo"<span style = 'color:red; font-weight:bold'>username is not available</span>";
				    echo"<script>$('#sign_up').prop('disable',true);</script>";
				}
				else{
					
					echo"<span style = 'color:green; font-weight:bold'>username is available</span>";
				    echo"<script>$('#sign_up').prop('disable',true);</script>";
				}
			}else{
				echo"<span style = 'color:blue'>username is empty</span>";
			}
?>