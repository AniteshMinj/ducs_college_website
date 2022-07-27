<?php include('../myserver.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DUCS Insert</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/my_navbar.css">
        <link rel="stylesheet" href="academics.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </head>
<body>
    <!-- NavBar -->
      <nav class="fix-navbar navbar navbar-expand-lg navbar-dark bg-dark py-0">
        <div class="container-fluid">
          <a class="navbar-brand h4" href="#">
            <img src="../img/du_logo.png" id="logo" alt="" width="30" height="24" class="d-inline-block align-text-top">
            DUCS
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 h4">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="admin.php?varname=<?php  echo $_GET['varname'] ?>">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="student.php">Student</a> 
              </li>
              
            </ul>
          </div> -->
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
     <!-- NavBar End -->

     <!-- Content -->
      <section class="info-container">
          Click Button below to insert
          <section id="InsertDeptInfo">
            <button onclick="insertDept()" class = "cursor_pointer insert_btn">Department</button>
            <button onclick="insertCourse()" class = "cursor_pointer insert_btn">Course</button>
            <button onclick="insertInstructor()" class = "cursor_pointer insert_btn">Teacher</button>
            <button onclick="insertStudent()" class = "cursor_pointer insert_btn">Student</button>
            <div id="data_insert"></div>
        </section>
        
        
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
            <li class="list-group-item">A fourth item</li>
          </ul>
        </section>
        <!--End Get Information from Database -->

    </section>

    <script src="academics_insert.js"></script>
</body>
</html>