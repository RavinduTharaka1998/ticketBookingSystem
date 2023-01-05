<?php

   require_once('../connection.php');

   if (isset($_POST['addticket'])) {

    $name          =  $_POST['name'];
    $phone   =  $_POST['phone'];
    $type       =  $_POST['type'];
	$noOfadult       =  $_POST['noOfA'];
	$noOfchild       =  $_POST['noOfC'];
	$date       =  $_POST['date'];
	

	if ($type == "1st Class") {

		$amount = $noOfadult*800 + $noOfchild*400;

	} else if ($type == "2nd Class") {

        $amount = $noOfadult*500 + $noOfchild*250;

	} else if ($type == "3rd Class") {
		
        $amount = $noOfadult*300 + $noOfchild*150;

	}
	
						$sql = "INSERT INTO ticket(name,phone,type,noOfAdult,noOfChild,date,amount) VALUES(?,?,?,?,?,?,?)";
			            
						$stmt = mysqli_stmt_init($conn);
						
						if(!mysqli_stmt_prepare($stmt, $sql))
						{
							echo "<script> alert('System Erorr???? SQL statement faild!');</script>";
						}
						else
						{
							mysqli_stmt_bind_param($stmt, "sssssss", $name,$phone,$type, $noOfadult,$noOfchild,$date,$amount);
							
							mysqli_stmt_execute($stmt);

						    echo "<script>alert('Your ticket booking is Success. Total Amount Rs.$amount. Thank you!!!'); window.location.href='../myticket.php';</script>";
						}

				
					}				
?>