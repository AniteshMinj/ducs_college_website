<?php include('../myserver.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DUCS_Student_Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/my_navbar.css">
    <link rel="stylesheet" href="student_index.css">

  </head>
<body>
      
      <nav class="fix-navbar navbar navbar-expand-lg navbar-dark bg-dark py-0">
        <div class="container-fluid">
          <a class="navbar-brand h4" href="#">
            <img src="../img/du_logo.png" id="logo" alt="" width="30" height="24" class="d-inline-block align-text-top">
            DUCS             
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 h4">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="student_info.php?varname=<?php  echo $_GET['varname'] ?>">Student Info</a>
              </li>
            </ul>
          </div>

          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 h4">
              <li class="nav-item name_log_cont">
                <p class = "username"><?php echo $_GET['varname'] ?></p>

                <form method="post" action="../../login.php" id="">
                  <button class="submit logoutbtn" name="log_out" >Logout</button>        
              </form>
              </li>
            </ul>
          </div>

        </div>
      </nav>    

      <!-- Main section -->
      <section class="main">
          <!-- Content above image -->
          <div id="main_text">
              <p id="main_text_ducs" style="display: flex; justify-content: center;color: #9ad1f2;">DUCS</p>
              <p style="display: flex;
                      justify-content: center;
                      margin: auto;
                      text-align: center;">
    The Ultimate Path to Knowledge and Opportunities</p>
          </div>
          <!--DUCS Image -->
          <div id="mul_img">
              <img src="../img/ducs_img1.jpg" class="control_img" alt="">
          </div>
      </section>
      
      <!-- Important Notice Secotion -->
      <section class="">
        
      </section>

      <!-- Footer -->
<footer class="text-white mb-0" style="background-color:darkcyan">
  <!-- Grid container -->
  <div class="container pt-2 footer_container">
    
    
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row"> 

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 ">
          <h5 class="">Useful Link</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="http://du.ac.in/" class="text-white">University of Delhi</a>
            </li>
            <li>
              <a href="http://www.ugc.ac.in/" class="text-white">ugc</a>
            </li>
            <li>
              <a href="https://exam.du.ac.in/UG-result.html" class="text-white">Results</a>
            </li>
            <li>
              <a href="http://healthcentre.du.ac.in/" class="text-white">Wus Health Center</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

         <!--Grid column-->
         <div class="col-lg-2 col-md-6 mb-4 mb-md-0 ">
          <h5 class="">About Us</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#" class="text-white">DUCS</a>
            </li>
            <li>
              <a href="#" class="text-white">Teachers</a>
            </li>
            <li>
              <a href="#" class="text-white">Alumni</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
        

        <!-- Grid column -->
        <div class="col-md-4 col-lg-2   mb-md-0 " style="width: 23rem;">
            <!-- Links -->
            <h5 class="fw-bold mb-4">
              Contact Us
            </h5>
            <p><i class="fas fa-home me-3"></i> Department of Computer Science
              (Faculty of Mathematical Sciences)
              1st Floor, New Academic Block
              University of Delhi
              Delhi - 110007. India.</p>
                          <p>
              <i class="fas fa-envelope me-3"></i>
              office@cs.du.ac.in
            </p>
            <p><i class="fas fa-phone me-3"></i> +91-11-27667591</p>
            <p><i class="fas fa-phone me-3"></i> +91-11-27667059</p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
          <div class="col-md-4 col-lg-4   mb-md-0 mb-4 text_box">
            <h5 class="footer-heading footer-heading-white">Query</h5>
            <form method="post" action="" class="contact-form">
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name" name="s_name">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email" name="email">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject" name="subject">
            </div>
            <div class="form-group">
            <textarea id="" cols="30" rows="3" class="form-control" placeholder="Message" name="message"></textarea>
            </div>
            <div class="form-group">
            <button type="submit" class="form-control submit px-3" name="query">Send</button>
            </div>
            </form>
          </div>
          <!-- Grid column -->
      </div>
      <!--Grid row-->

     

    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

    <!-- Section: Social media -->
    <section class="mb-0 text-center">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>

          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-twitter"></i
          ></a>

          <!-- Google -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-google"></i
          ></a>

          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-instagram"></i
          ></a>

          <!-- Linkedin -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>

          <!-- Github -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-github"></i
          ></a>
    </section>
    <!-- Section: Social media -->



  <!-- Copyright -->
  <div class="text-center p-0" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="#">ducs.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
      
      
    <!-- <script src="student_index.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>