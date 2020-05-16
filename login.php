<?php
  if($_POST){
    $host='localhost';
    $user='root';
    $pass='';
    $db='techhub';

    $email=$_POST['email'];
    $password=$_POST['password'];

    $conn=mysqli_connect($host,$user,$pass,$db);
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