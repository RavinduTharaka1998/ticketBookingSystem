<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/index.css" />
    <link rel = "icon" href = "https://mpng.subpng.com/20180327/btq/kisspng-cinema-ticket-stock-photography-royalty-free-ticket-5ab9d74c820bf7.3306834615221287165327.jpg">
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
       
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        
        <!--Sign In form-->
          <form action="backend/signinback.php" method = "post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name = "username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name = "password" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" name = "submit"/>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


          <!--Sign Up form-->
          <form action="backend/signupback.php" class="sign-up-form" method = "post">
            <h2 class="title">Sign up</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name = "name" id = "username" onInput="checkUsername()" required/>
            </div>
            <span id = "check_username"></span>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name = "email" id = "mail" onInput="checkEmail()" required/>
            </div>
            <span id = "check_email"></span>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name = "pass" id = "password" onInput="checkpassword()" required/>
            </div>
            <span id = "check_password" style = 'font-size: 13px; color: red;'></span>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" name = "cpassword" id = "cpassword" onInput="checkcpassword()" required/>
            </div>
            <span id = "check_cpassword" style = 'font-size: 13px; color: red;'></span>

            <input type="submit" class="btn" value="Sign up" name = "sign_up" id = "sign_up"/>

            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Click Sign up Button.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
            <br><br>
            <div class = "goback">
                <a href="dashboard.php"><- Go Back</a>
            </div>
            
          </div>
          <img src="image/p1.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            Click Sign In Button.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="image/p2.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
    <script src="js/signUp.js"></script>
    <script src = "https://code.jQuery.com/jquery-3.6.0.min.js"></script>
  </body>
</html>
