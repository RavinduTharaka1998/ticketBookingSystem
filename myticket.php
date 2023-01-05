<?php 

require_once('connection.php');
session_start();
 if( $_SESSION['username'] == null){
	
     header('location:index.php');
     
}

$query = "SELECT * FROM ticket";
$search_result = filterTable($query);

function filterTable($query)
{
	$connection1 = mysqli_connect("localhost:3307","root","","ticket_db");
	$filter_Result = mysqli_query($connection1,$query);
	return $filter_Result;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta charset="ISO-8859-1">
        <title>myTickets</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="CSS/myticket.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

        <link rel = "icon" href = "https://mpng.subpng.com/20180327/btq/kisspng-cinema-ticket-stock-photography-royalty-free-ticket-5ab9d74c820bf7.3306834615221287165327.jpg">
    </head>

    <script> 
		function delete_data(id)
		{
			if(confirm("Are you sure to delete the ticket ?"))
			{
				window.location.href="backend/deleteticket.php?id="+id;
			}
		}
	</script>


    <body>
        
        <hr>
        <div class = "top">
          <a href="#">
            <img src = "image/logo.png"  width = "80" height="80">
            <h1> Online Ticket Booking </h1>
          </a>

            <div class = "top-right">
                <a href = "dashboard.php">Go Back</a>
                <a href = "backend/logoutback.php">LogOut</a>
            </div>
           
        </div>
        <hr>

        <div class = "left-right">
            <div class = "img-list">
                <img src = "image/m1.jpg" width="100" height="150">
                <img src = "image/m2.png" width="100" height="150">
                <img src = "image/m3.png" width="120" height="150">
                <img src = "image/m4.png" width="120" height="120">
                <img src = "image/m5.png" width="120" height="120">
                <img src = "image/m7.png" width="120" height="120">
            </div>
            <div class = "note">
                <h4 class = "blink">Click the image below to know information about upcoming films.</h4>
                <img src = "image/notice.png" width="200" height="80">
            </div>
            <div class = "profile">
                <h4>Hi !!! <?php echo$_SESSION['username'] ;?></h4>
                <img src = "image/profile.png" width="50" height="50">
            </div>
        </div>
        <br>

        <header class = "header">
              <div class = "view-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>No of Adult</th>
                                <th>No of Child</th>
                                <th>Date</th>
                                <th>Payment</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
				        <tbody>
			
                            <?php

                                while($row = mysqli_fetch_array($search_result))
                                {
                                    $id=$row["id"];
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo "<p>".$row['name']."</p>";?></td>
                                        <td><?php echo "<p>".$row['phone']."</p>";?></td>
                                        <td><?php echo "<p>".$row['type']."</p>";?></td>
                                        <td><?php echo "<p>".$row['noOfAdult']."</p>";?></td>
                                        <td><?php echo "<p>".$row['noOfChild']."</p>";?></td>
                                        <td><?php echo "<p>".$row['date']."</p>";?></td>
                                        <td><?php echo "<p>".$row['amount']."</p>";?></td>
                                        <td>
                                            <form method="post" action="editticket.php">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                                                <input type="submit" class="update" name="editticket" value="Edit"/>
								            </form>
                                        </td>
                                        <td><?php echo "<button type='submit' onclick='delete_data($id)' class='delete'>Delete</button>";?></td>
                                    </tr>
                                    <?php
                                    
                                }
                            
                            
                            ?>
                        </tbody>	  
                    </table>
              </div>
        </header>
        <br>
                <div class = "img-list">
                    <img src = "image/m1.jpg" width="200" height="250">
                    <img src = "image/m2.png" width="200" height="250">
                    <img src = "image/m3.png" width="200" height="250">
                    <img src = "image/m4.png" width="220" height="250">
                    <img src = "image/m5.png" width="220" height="250">
                    <img src = "image/m6.jpg" width="220" height="250">
                    <img src = "image/m7.png" width="220" height="250">
                </div>
              <br>
         <!--Footer start-->
        <div class="footer">
            <p>All Rights Reserved © 2022</p>
            <p>
                <ion-icon name="mail-open-outline"></ion-icon>btikect@gmail.com<br>

                <ion-icon name="call-outline"></ion-icon>+94716092918
            </p>
        </div>


        <script src="https://kit.fontawesome.com/dbed6b6114.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>