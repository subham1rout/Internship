<?php
  if($_POST){
    include('config/database.php');
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * from users where email='$email' and password='$password'";
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)==1){
      session_start();
      $_SESSION['auth']='true';
      header('location:cbranch.php?login=success');
    }else{
      header('location:index.php?login=failure');
    }
  }
?>