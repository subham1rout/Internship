<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>TechHub</title>
</head>

<body>
  <div class="main-body container-fluid">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-6 col-md-5 form-area">
          <h2>LogIn</h2>
          <form class="main-form" action="login.php" method="POST">
            <?php 
              if(!isset($_GET['login'])){
                // exit();
              }else{
                $loginCheck=$_GET['login'];
                if($loginCheck == "failure"){
                  echo "<p class='alert alert-danger'>Invalid email and password.</p>";
                }
              }
            ?>
            <div class="form-group">
              <label for="email" id="email-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter emailid" name="email" required>
            </div>
            <div class="form-group">
              <label for="password" id="password-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
            </div>
            <div class="form-group form-check">
              <div>
                <input type="checkbox" class="form-check-input" id="check">
                <label class="form-check" for="check" id="check-label">remember me</label>
              </div>
              <div>
                <a href="#">forgot password?</a>
              </div>
            </div>
            <button type="submit" name="submit" class="btn-lg">LogIn</button>
          </form>
          <div class="mx-5 my-2 reg" style="text-align:center;">New User?<a href="registrationf.php" class="text-success">SignUp</a> Here</div>
        </div>
      </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>