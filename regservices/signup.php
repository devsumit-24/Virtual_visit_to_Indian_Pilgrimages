<?php
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $path = "../start.html";

    $con = mysqli_connect('localhost','root','','pilgrimage');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }

      $sql=mysqli_query($con,"SELECT * FROM users where email='$email' and pass='$pass'");
      $row  = mysqli_fetch_array($sql);
      if(is_array($row))
      {
          $_SESSION["email"] = $row['email'];
          $_SESSION["pass"]=$row['pass'];
        
          header("Location: $path",true,301); 
        
      }
      else
      {
          echo "Invalid Email ID/Password";
      }
