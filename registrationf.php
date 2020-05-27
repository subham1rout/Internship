<?php
  // $fullUrl='http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URL]';
  // if(strpos($fullUrl, 'signup=empty') == true){
  //   echo "<p class='alert alert-danger'>Fields can not be empty!!!</p>";
  //   exit();
  // }
  // elseif(strpos($fullUrl, 'signup=email') == true){
  //   echo '<p class="alert alert-danger">Email is not valid!!!</p>';
  //   exit();
  // }
  // elseif(strpos($fullUrl, 'signup=password') == true){
  //   echo 'Hii';
  //   // echo '<p class="alert alert-danger">Password contain atleast 6 character along with upper and lower case!!!</p>';
  //   exit();
  // }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>TechHub-Registration</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-6 col-md-5 form-area">
          <h2>Registration</h2>
          <?php
          if(!isset($_GET['signup'])){
            // exit();
          }else{
            $signupCheck= $_GET['signup'];
            if($signupCheck == "empty"){
              echo "<p class='alert alert-danger'>Fields can not be empty!!!</p>";
              // exit();
            }
            elseif($signupCheck == "email"){
              echo '<p class="alert alert-danger">Email is not valid!!!</p>';
              // exit();
            }
            elseif($signupCheck == "password"){
              echo '<p class="alert alert-danger">Password contain atleast 6 character along with upper and lower case!!!</p>';
              // exit();
            }
          }
          ?>
          <form class="main-form" action="registration.php" method="POST"> 
            <div class="msg"></div>
            <div class="form-group">
              <label for="email" id="email-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-group">
              <label for="username" id="username-label">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password" id="password-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn-lg">SignUp</button>
          </form>
          <div class="mx-5 my-2 reg" style="text-align:center;">Already Account?<a href="index.php" class="text-success">LogIn</a> Here</div>
        </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>
</html>