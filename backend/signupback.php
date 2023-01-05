<?php

   require_once('../connection.php');

    if (isset($_POST['sign_up'])){

    $username     =  $_POST['name'];
    $email      =  $_POST['email'];
    $password      =  $_POST['pass'];

						$pass = password_hash($password, PASSWORD_DEFAULT);

						$sql = "INSERT INTO user(username,email,password) VALUES(?,?,?)";
			            
						$stmt = mysqli_stmt_init($conn);
						
						if(!mysqli_stmt_prepare($stmt, $sql))
						{
							echo "<script> alert('SQL statement faild!');</script>";
							header("location:../signup.php");
						}
						else
						{
							mysqli_stmt_bind_param($stmt, "sss", $username,$email,$pass);
							
							mysqli_stmt_execute($stmt);
							
							echo "<script>alert('User Registration Successful..'); window.location.href='../index.php';</script>";
						}
		
	}
					
?>