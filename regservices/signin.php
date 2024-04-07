<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $rep_pass = $_POST['re_pass'];
    
 
    $con = mysqli_connect('localhost','root','','pilgrimage');
    $path = "../start.html";

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }
 
    if($pass == $rep_pass){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            
            $stmt = $con->prepare("INSERT INTO users (name, email, pass) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $pass);
            $rs = $stmt->execute();
            if($rs){
                // echo "Account created successfullly";
                header("Location: $path",true,301); 
            }
        }
        else{
            echo "Enter valid email";
        }
    }
    else{
        echo "Passwords doesn't match";
    }
