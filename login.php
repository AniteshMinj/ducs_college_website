<?php include('./FrontEnd/myserver.php') ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>DUCS</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="FrontEnd/css/login.css">
  <script type="text/javascript" src="FrontEnd/js/login.js"></script>

</head>
<body>
<p class="tip"></p>
<div class="cont">
    <div class="form sign-in back_blue" id="login_form">
      <h2>Student Login</h2>
      <form method="post" action="login.php" id="sign_in_form">
        
        <label id="email">
          <span>Email</span>
          <input type="email" name="email" id="signin_email" placeholder="anitesh@du.ac.in" required pattern="(.+@gmail.com)|(.+@yahoo.com)|(.+@du.ac.in)" title="Please enter an email with gmail.com,du.ac.in or yahoo.com extension" /><br>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" id="signin_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" />
        </label>
        <!-- <a href="forgot.html"><p class="forgot-pass">Forgot password?</p></a> -->
        <button class="submit" id="sign_in" name="login_student">Sign In</button>
      </form>
      <a >
          <button type="button" class="fb-btn" onclick="adminLogin()"><span>Continue as Admin</span></button>
      </a>
    </div>
      

  <div class="sub-cont back_blue">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <h2>Register Now!</h2>
      </div>
      <div class="img__text m--in">
        <h3>If you already have an account, Sign in!</h3>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <form method="post" action="login.php" id="register_form">
          <label>
          <span>Name</span>
            <input type="text" name="name" id="fullname"  pattern=".{3,}" required title="min character is 3" placeholder="Aman Sharma" required><br>
        </label>     
        <label>
          <span>Email</span>
            <input type="email" name="email" id="signup_email" placeholder="aman@du.ac.in" required pattern="(.+@du.ac.in)"
            title="Please enter an email with Medipol extension"><br>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password_1" id="signup_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" > <br>
        </label>
    
        <label>
          <span>Confirm Password</span>
          <input type="password" name="password_2" id="confirm_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" > <br>
        </label>

        <label>
          <span>Phone Number</span>
          <input type="tel" id="phone" name="phone" placeholder="5351234567" required><br><br>
        </label>

         <label id="account">
          <span>Account type</span>
          <select name="acc_type">
            <option value="student" >Student</option>
            <option value="admin" >Admin</option>
          </select>
        </label>


        <button class="submit" name="register_user" onclick="Validate()" >Sign Up</button>

        
      </form>
    </div>
  </div>
</div>

<a class="icon-link">
  <h1 class="col_blue">Delhi University DUCS</h1>
  <img src="du_logo.png">
</a>
 <script type="text/javascript" src="FrontEnd/js/script.js"></script>
</body>
</html>
