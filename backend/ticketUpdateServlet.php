<?php
require_once('../connection.php');


if (isset($_POST['updateticket'])){
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$type = $_POST['type'];
	$noOfA = $_POST['noOfA'];
	$noOfC = $_POST['noOfC'];
	$date = $_POST['date'];
	
    if ($type == "1st Class") {

		$amount = $noOfA*800 + $noOfC*400;

	} else if ($type == "2nd Class") {

        $amount = $noOfA*500 + $noOfC*250;

	} else if ($type == "3rd Class") {
		
        $amount = $noOfA*300 + $noOfC*150;

	}
		
		$sql = "UPDATE ticket SET name = '$name',phone = '$phone',type = '$type', noOfAdult='$noOfA', noOfChild='$noOfC',date='$date', amount='$amount' where id = '$id'";
	        
	      
			if(mysqli_query($conn,$sql))
			{
				echo "<script>alert('Record Update successfully'); window.location.href='../myticket.php';</script>";
			}
			else
			{
				echo "<script>alert('Erorr !!! Record Update Unsuccessfully'); window.location.href='../myticket.php';</script>";
			}

}

?>