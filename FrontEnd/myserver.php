<?php 
session_start();

$db = mysqli_connect('localhost', 'root', '', 'ducs_database');

  if (isset($_POST['register_user'])) {							//Register User

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $acc_type = mysqli_real_escape_string($db, $_POST['acc_type']);

    $user_check_query = "SELECT * FROM visitor WHERE name='$name' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
      if ($user) { 

        if ($user['email'] == $email || $user['name'] == $name) {
          $register_message = "The user already registered the system!";
          echo "<script type='text/javascript'>alert('$register_message');</script>";
      }
    }
    else
    {
      $password = md5($password_1);

      $query = "INSERT INTO visitor (name, email, password, phone,  type) 
            VALUES('$name', '$email', '$password', '$phone', '$acc_type')";
      mysqli_query($db, $query);
      echo "<script type='text/javascript'>alert('Successfully registered'); 
      window.location.href='login.php'; </script>";
    }


  }

  if (isset($_POST['login_student'])){         // Student login
    
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $password = md5($password);
    $query = "SELECT * FROM visitor WHERE email='$email' and type='student'";
    $results = mysqli_query($db, $query);


    if(mysqli_num_rows($results) == 0)
    {

      echo "<script type='text/javascript'>alert('Student not found!');</script>";

    }
    else if (isset($email) and isset($password) )
    {

      $row = mysqli_fetch_array($results); 
      $username = $row['name'];

      if($password != $row['password'])
      {
        echo "<script type='text/javascript'>alert('Password is wrong, Please try again!');</script>";
      }
      else
      {
        $_SESSION['name'] = $username;
        $_SESSION['email']= $email;
      
        echo "<script type='text/javascript'>alert('Login Success, Welcome ' + '$username'); 
        window.location.href='FrontEnd/student/student_index.php?varname=$username'; </script>";
      }
    }
  }

  if (isset($_POST['login_admin']))           // Student login
  {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $password = md5($password);
    $query = "SELECT * FROM visitor WHERE email='$email' and type='admin'";
    $results = mysqli_query($db, $query);


    if(mysqli_num_rows($results) == 0)
    {

      echo "<script type='text/javascript'>alert('Admin not found!');</script>";

    }
    else if (isset($email) and isset($password) )
    {

      $row = mysqli_fetch_array($results); 
      $username = $row['name'];

      if($password != $row['password'])
      {
        echo "<script type='text/javascript'>alert('Password is wrong, Please try again!');</script>";
      }
      else
      {
        $_SESSION['name'] = $username;
        $_SESSION['email']= $email;
      
        echo "<script type='text/javascript'>alert('Login Success, Welcome ' + '$username'); 
        window.location.href='FrontEnd/admin/academics.php?varname=$username'; </script>";
      }
    }
  }


  if (isset($_POST['log_out']))					//Log out
  {
          echo "<script type='text/javascript'>alert('Login Success, Welcome); 
        window.location.href='../login.php'; </script>";
  } 

  if (isset($_POST['query'])) {							//Query
    $s_name = mysqli_real_escape_string($db, $_POST['s_name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $subject = mysqli_real_escape_string($db, $_POST['subject']);
    $message = mysqli_real_escape_string($db, $_POST['message']);

    $check_query = "SELECT * FROM query WHERE message='$message' LIMIT 1";
    $result = mysqli_query($db, $check_query);
    $msg = mysqli_fetch_assoc($result);

    if ($msg) { 
          echo "<script type='text/javascript'>alert('This query is already raised');</script>";
    }
    else
    {
      $query = "INSERT INTO query (s_name, email, subject, message) 
      VALUES('$s_name', '$email','$subject', '$message')";
      mysqli_query($db, $query);
      echo "<script type='text/javascript'>alert('Successfully Raised a Query');</script>";
    }
  }

  if (isset($_POST['insert_into_dept'])) {							//Insert Data to Department
    $dept_name = mysqli_real_escape_string($db, $_POST['dept_name']);
    $build_name = mysqli_real_escape_string($db, $_POST['build_name']);
    $budget = mysqli_real_escape_string($db, $_POST['budget']);
    
    $check_query = "SELECT * FROM department WHERE dept_name='$dept_name' LIMIT 1";
    $result = mysqli_query($db, $check_query);
    $dept = mysqli_fetch_assoc($result);

    if ($dept) { 
          echo "<script type='text/javascript'>alert('Department already exist');</script>";
    }
    else
    {
        $query = "INSERT INTO department (dept_name, building, budget) 
        VALUES('$dept_name', '$build_name', '$budget')";
        mysqli_query($db, $query);
        echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
    }
  }

  if (isset($_POST['insert_into_course'])) {							//Insert Data to course
    $course_id = mysqli_real_escape_string($db, $_POST['course_id']);
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $dept_name = mysqli_real_escape_string($db, $_POST['dept_name']);
    $credits = mysqli_real_escape_string($db, $_POST['credits']);
    
    $check_query = "SELECT * FROM course WHERE course_id='$course_id' LIMIT 1";
    $result = mysqli_query($db, $check_query);
    $course = mysqli_fetch_assoc($result);

    $check_query = "SELECT * FROM department WHERE dept_name='$dept_name' LIMIT 1";
    $result = mysqli_query($db, $check_query);
    $dept = mysqli_fetch_assoc($result);

    if ($course) { 
          echo "<script type='text/javascript'>alert('Course already exist');</script>";
    }
    else if($dept)
    {
        $query = "INSERT INTO course (course_id,	title,	dept_name,	credits	) 
        VALUES('$course_id',	'$title',	'$dept_name',	'$credits'	)";
        mysqli_query($db, $query);
        echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('Department Does not exist');</script>";
    }
  }

  if (isset($_POST['insert_into_instructor'])) {							//Insert Data to instructor
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $dept_name = mysqli_real_escape_string($db, $_POST['dept_name']);
    $salary = mysqli_real_escape_string($db, $_POST['salary']);
    
    $check_query = "SELECT * FROM instructor WHERE id='$id' LIMIT 1";
    $result = mysqli_query($db, $check_query);
    $tid = mysqli_fetch_assoc($result);

    $check_query = "SELECT * FROM department WHERE dept_name='$dept_name' LIMIT 1";
    $result = mysqli_query($db, $check_query);
    $dept = mysqli_fetch_assoc($result);

    if ($tid) { 
          echo "<script type='text/javascript'>alert('Teacher already exist');</script>";
    }
    else if($dept)
    {
        $query = "INSERT INTO instructor (id,	name,	dept_name,	salary	) 
        VALUES('$id',	'$name',	'$dept_name',	'$salary'	)";
        mysqli_query($db, $query);
        echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('Department Does not exist');</script>";
    }
  }  

  if (isset($_POST['insert_into_student'])) {							//Insert Data to Student
    
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $subject = mysqli_real_escape_string($db, $_POST['subject']);
    $dept_name = mysqli_real_escape_string($db, $_POST['dept_name']);
    $course_name = mysqli_real_escape_string($db, $_POST['course_name']);
    $marks = mysqli_real_escape_string($db, $_POST['marks']);
    $attendance_perc = mysqli_real_escape_string($db, $_POST['attendance_perc']);
    
    $check_query = "SELECT * FROM student WHERE name='$name' and subject ='$subject' LIMIT 1";
    $result = mysqli_query($db, $check_query);
    $stid = mysqli_fetch_assoc($result);

    $check_query = "SELECT * FROM department WHERE dept_name='$dept_name' LIMIT 1";
    $result = mysqli_query($db, $check_query);
    $dept = mysqli_fetch_assoc($result);

    $check_query = "SELECT * FROM course WHERE title='$course_name' LIMIT 1";
    $result = mysqli_query($db, $check_query);
    $course = mysqli_fetch_assoc($result);

    if ($stid) { 
          echo "<script type='text/javascript'>alert('Data already exist');</script>";
    }
    else if($dept && $course)
    {
        $query = "INSERT INTO student (	name,	subject,dept_name,	course_name, marks, attendance_perc	) 
        VALUES(	'$name',	'$subject', '$dept_name', '$course_name',	'$marks', '$attendance_perc'	)";
        mysqli_query($db, $query);
        echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('Either Department or Course Does not exist');</script>";
    }
  }  
  
  if(isset($_POST['get_dept_info']))
  {
    $query = "SELECT * FROM department ";
    $result = mysqli_query($db, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $string ="";
        while($row = mysqli_fetch_assoc($result)) {
          $string = $string.
          "<tr> " 
          ."<td class='td'>". $row["dept_name"]."</td>"
          ."<td class='td'>". $row["building"]."</td>" 
          ."<td class='td'>". $row["budget"] ."</td>"
          ." </tr>";
        }
        echo "<div class='ShowInfo' >";
        echo "<table style='border: solid 4px #4291a7;'>";
        echo "<tr><th class='th'>Department</th><th class='th'>Building</th><th class='th'>Budget</th></tr>";
        echo " $string";
        echo "</table>";
        echo "</div>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('No Dept Exist');</script>";
    }
  }

  if(isset($_POST['get_student_info']))
  {
    $query = "SELECT * FROM student ";
    $result = mysqli_query($db, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $string ="";
        while($row = mysqli_fetch_assoc($result)) {
          $string = $string.
          "<tr> " 
          ."<td class='td'>". $row["name"]."</td>"
          ."<td class='td'>". $row["dept_name"]."</td>"
          ."<td class='td'>". $row["course_name"]."</td>" 
          ."<td class='td'>". $row["subject"]."</td>"
          ."<td class='td'>". $row["marks"] ."</td>"
          ."<td class='td'>". $row["attendance_perc"] ."</td>
          .</tr>";
        }

        echo "<div class='ShowInfo' >";
        echo "<table style='border: solid 4px #4291a7;'>";
        echo "<tr><th class='th'>Name</th><th class='th'>Department</th>
              <th class='th'>Course</th>
              <th class='th'>Subject</th><th class='th'>Marks</th>
              <th class='th'>Attendance</th></tr>";
        echo " $string";
        echo "</table>";
        echo "</div>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('No Student Exist');</script>";
    }
  }

  if(isset($_POST['get_course_info']))
  {
    $query = "SELECT * FROM course ";
    $result = mysqli_query($db, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $string ="";
        while($row = mysqli_fetch_assoc($result)) {
          $string = $string.
          "<tr> " 
          ."<td class='td'>". $row["title"]."</td>"
          ."<td class='td'>". $row["dept_name"]."</td>"
          ."<td class='td'>". $row["credits"] ."</td>"
          ." </tr>";
        }
        echo "<div class='ShowInfo' >";
        echo "<table style='border: solid 4px #4291a7;'>";
        echo "<tr><th class='th'>Title</th><th class='th'>Department</th><th class='th'>Total Credit</th></tr>";
        echo " $string";
        echo "</table>";
        echo "</div>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('No Student Exist');</script>";
    }
  }




?>

