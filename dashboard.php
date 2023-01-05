<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta charset="ISO-8859-1">
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="CSS/dashboard.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

        <link rel = "icon" href = "https://mpng.subpng.com/20180327/btq/kisspng-cinema-ticket-stock-photography-royalty-free-ticket-5ab9d74c820bf7.3306834615221287165327.jpg">
    </head>
    <body>
        
        <hr>
        <div class = "top">
            <div class = "top-left">
                <img src = "image/logo.png"  width = "80" height="80">
                <h1><a href="#"> Online Ticket Booking </a></h1>
            </div>
            <div class = "top-right">
                <a href = "addticket.php">Book Ticket</a>
                <a href = "myticket.php">My Tickets</a>
            </div>
        </div>
        <hr>

        <br>

        <div class = "header">
            <div class = "head-bottom">
                <h2><marquee class = "blink" behavior = " alternate" direction="left">... The Best Ticket Booking System ...</marquee></h2>
                <br>
                  <a href="myticket.php"><button type = "button"  class = " head-btn head-btn1">My Tickets</button></a>
                  <a href="addticket.php"><button type = "button"  class = "head-btn head-btn2">Book Ticket</button></a>
                <br><br>
            </div>
        </div>

        <div class = "ticket">
             <div class = "ticket-inner blinking-boder1">
                 <h4 class="blinking1" >1<sup>st</sup> Class Tickets</h4>
                 <div class = "t-details">
                    <img src = "image/ticket.png" width = "100" height="60"/>
                    <table>
                        <tr>
                            <td>Adult Price</td>
                            <td>Rs.800.00/-</td>
                        </tr>
                        <tr>
                            <td>Child Price</td>
                            <td>Rs.400.00/-</td>
                        </tr>
                    </table>
                 </div>
                
             </div>
             <div class = "ticket-inner blinking-boder2">
                <h4 class="blinking2">2<sup>nd</sup> Class Tickets</h4>
                <div class = "t-details">
                    <img src = "image/ticket.png" width = "100" height="60"/>
                    <table>
                        <tr>
                            <td>Adult Price</td>
                            <td>Rs.500.00/-</td>
                        </tr>
                        <tr>
                            <td>Child Price</td>
                            <td>Rs.250.00/-</td>
                        </tr>
                    </table>
                 </div>
             </div>
             <div class = "ticket-inner blinking-boder3">
                <h4 class="blinking3">3<sup>rd</sup> Class Tickets</h4>
                <div class = "t-details">
                    <img src = "image/ticket.png" width = "100" height="60"/>
                    <table>
                        <tr>
                            <td>Adult Price</td>
                            <td>Rs.300.00/-</td>
                        </tr>
                        <tr>
                            <td>Child Price</td>
                            <td>Rs.150.00/-</td>
                        </tr>
                    </table>
                 </div>
             </div>
        </div>
        <hr>
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
        <hr>
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