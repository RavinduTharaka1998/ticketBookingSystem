<?php 

require_once('connection.php');
session_start();
 if( $_SESSION['username'] == null){
	
     header('location:index.php');
     
}

if(isset($_POST['editticket'])){
	
	$id = $_POST['id'];
	$select = mysqli_query($conn,"select * from ticket where id = '$id'");
	$row = mysqli_fetch_assoc($select);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta charset="ISO-8859-1">
        <title>editTicket</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="CSS/editticket.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel = "icon" href = "https://mpng.subpng.com/20180327/btq/kisspng-cinema-ticket-stock-photography-royalty-free-ticket-5ab9d74c820bf7.3306834615221287165327.jpg">
    
        <script>
            function checkPhone() {
                
                
                var phone = document.getElementById("phone").value;
            
            
                if (phone.length != 10) {
            
                    $("#check_phone").html('Enter Valide Phone Number');
                   
                } 
            
                else {
                    $("#check_phone").html('');
                }
            }
            
            function checkAdult() {
                
                
                var adult = document.getElementById("adult").value;
            
            
                if (adult <= 0) {
            
                    $("#check_adult").html('Enter Valide  Number for No of Adult');
                   
                } 
            
                else {
                    $("#check_adult").html('');
                }
            }
            
            function checkChild() {
                
                
                var adult = document.getElementById("child").value;
            
            
                if (adult <= 0) {
            
                    $("#check_child").html('Enter Valide  Number for No of Child');
                   
                } 
            
                else {
                    $("#check_child").html('');
                }
            }
        </script>
    </head>
    <body>
        
        <hr class = "HR">
        <div class = "top">
          <a href="#">
            <img src = "image/logo.png"  width = "80" height="80">
            <h1> Online Ticket Booking </h1>
          </a>

            <div class = "top-right">
                <a href = "dashboard.php">Go Back</a>
                <a href = "backend/logoutback.php">Logout</a>
            </div>
           
        </div>
        <hr>

        <div class = "left-right">
            <div class = "img-list">
                <img src = "image/m1.jpg" width="100" height="150">
                <img src = "image/m2.png" width="100" height="150">
                <img src = "image/m3.png" width="120" height="150">
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
            <div class = "header-inner">
                    <h2><marquee class = "blink" behavior = " alternate" direction="left">...Edit Your Tickets...</marquee></h2>
                    <br>
                    <form action = "backend/ticketUpdateServlet.php" method = "POST">

                        <input type="text" class="form-control"  aria-describedby="emailHelp" name = "id" required value="<?=$row['id'];?>">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control"  aria-describedby="emailHelp" name = "name" required value="<?=$row['name'];?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                            <input type="number" class="form-control"  aria-describedby="emailHelp" name = "phone" id = "phone" onInput = "checkPhone()" required value="<?=$row['phone'];?>">
                            <span style="color: red;" id = "check_phone"></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ticket Type</label>
                            <select class="form-select " aria-label="Default select example" name = "type" required value="<?=$row['type'];?>">
                                <option value="<?=$row['type'];?>"><?=$row['type'];?></option>
                                <option value="1st Class">1st Class</option>
                                <option value="2nd Class">2nd Class</option>
                                <option value="3rd Class">3rd Class</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No of Adult</label>
                            <input type="number" class="form-control"  aria-describedby="emailHelp" name = "noOfA" id = "adult" onInput = "checkAdult()"required value="<?=$row['noOfAdult'];?>">
                            <span style="color: red;" id = "check_adult"></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No of Child</label>
                            <input type="number" class="form-control"  aria-describedby="emailHelp" name = "noOfC" id = "child" onInput = "checkChild()"required value="<?=$row['noOfChild'];?>">
                            <span style="color: red;" id = "check_child"></span>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Date</label>
                            <input type="date" class="form-control"  aria-describedby="emailHelp" name = "date" required value="<?=$row['date'];?>">
                        </div>
                        
                        <button type="submit" class="btn btn-success" name = "updateticket">update ticket</button>
                    </form>
                <br><br>
            </div>
        </header>

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
        <script src = "https://code.jQuery.com/jquery-3.6.0.min.js"></script>
    </body>
</html>