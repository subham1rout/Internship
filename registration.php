<?php
    function validatePassword($pass){
      if(strlen($pass)>=6){
        if(!ctype_upper($pass) && !ctype_lower($pass)){
          return TRUE;
        }
      }
    }

    if(isset($_POST['submit'])){
      $host='localhost';
      $user='root';
      $pass='';
      $db='techhub';
      $conn=mysqli_connect($host,$user,$pass,$db);

      $email=mysqli_real_escape_string($conn, $_POST['email']);
      $username=mysqli_real_escape_string($conn, $_POST['username']);
      $password=mysqli_real_escape_string($conn, $_POST['password']);

      if(empty($email) || empty($username) || empty($password)){
        header('location: registrationf.php?signup=empty');
        exit();
      }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header('location: registrationf.php?signup=email');
        exit();
      }elseif(!validatePassword($password)){
        header('location: registrationf.php?signup=password');
        exit();
      }
      else{
        echo 'success';
        $query="INSERT into users(email,username,password) VALUES ('$email','$username','$password')";
        $result=mysqli_query($conn,$query);
        if($result==1){
          session_start();
          $_SESSION['auth']='true';
          header('location: cbranch.php?signup=success');
          exit();
        }
      }
     }
?>