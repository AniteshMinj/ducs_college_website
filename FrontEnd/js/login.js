 

 function Validate() {
      var password = document.getElementById("signup_password").value;
      var confirmPassword = document.getElementById("confirm_password").value;

      if (password != confirmPassword) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      }
       else if (confirmPassword == "" || password == "") {

      }
      else{
        confirm_password.setCustomValidity("");
      }
    }

 function adminLogin(){
  var login_form = document.getElementById("login_form");
  let code =`
          <h2>Admin Login</h2>
          <form method="post" action="login.php" id="sign_in_form">
            
            <label id="email">
              <span>Email</span>
              <input type="email" name="email" id="signin_email" placeholder="anitesh@du.ac.in" required pattern="(.+@gmail.com)|(.+@yahoo.com)|(.+@du.ac.in)" title="Please enter an email with gmail.com,du.ac.in or yahoo.com extension" /><br>
            </label>
            <label>
              <span>Password</span>
              <input type="password" name="password" id="signin_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" />
            </label>
            <button class="submit" id="sign_in" name="login_admin">Sign In</button>
          </form>
          <a >
            <button type="button" class="fb-btn" onclick="studentLogin()"><span>Continue as Student</span></button>
          </a>
          `
  document.getElementById("login_form").innerHTML = code;
 }   
  
 function studentLogin(){
  var login_form = document.getElementById("login_form");
  let code =`
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
            <button class="submit" id="sign_in" name="login_student">Sign In</button>
          </form>
          <a >
              <button type="button" class="fb-btn" onclick="adminLogin()"><span>Continue as Admin</span></button>
          </a>
          `
  document.getElementById("login_form").innerHTML = code;
 }