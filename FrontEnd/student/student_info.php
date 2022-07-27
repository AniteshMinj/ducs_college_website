
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/my_navbar.css">
    <link rel="stylesheet" href="student_info.css">
    <link rel="stylesheet" href="student_index.css">
</head>
<body>
  <!-- NavBar  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
        <div class="container-fluid">
          <a class="navbar-brand h4" href="student_index.php?varname=<?php session_start(); echo $_GET['varname'] ?>">
            <img src="../img/du_logo.png" id="logo" alt="" width="30" height="24" class="d-inline-block align-text-top">
            DUCS
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 h4">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="student_index.php?varname=<?php echo $_GET['varname'] ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              
            </ul>
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
        </div>
      </nav>    
    <!-- NavBar End -->
      <section class="info-container">
      <!-- Get Information from Database -->
      <section id="GetInfo" class="card" style="width: 18rem;">
          <div class="card-header">
              <span style="display: flex; justify-content:center;">Click Below link to View</span> 
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <form method="post" action="../academics_result.php" id="" target="_blank">
                  <button class="submit getInfoBtn" name="get_dept_info" >Department Information</button>        
              </form>
            </li>
            <li class="list-group-item card-header">
              <form method="post" action="../academics_result.php" id="" target="_blank">
                  <button class="submit getInfoBtn" name="get_student_info" >Student Information</button>        
              </form>
            </li>
            <li class="list-group-item card-header">
              <form method="post" action="../academics_result.php" id="" target="_blank">
                  <button class="submit getInfoBtn" name="get_course_info" >Course Information</button>        
              </form>
            </li>
            <li class="list-group-item">
              <form method="post" action="../academics_result.php" id="" target="_blank">
                  <button class="submit getInfoBtn" name="get_course_info" ></button>        
              </form>
            </li>

            <!-- <li class="list-group-item">
              <form method="post" action="../academics_result.php" id="" target="_blank">
                  <button class="submit getInfoBtn" name="get_student_details" ></button>        
              </form>
            </li> -->

          </ul>
        </section>
        <!--End Get Information from Database -->
      

      </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>