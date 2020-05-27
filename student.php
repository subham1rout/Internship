<?php
    session_start();
    if(!$_SESSION['auth']){
        header('location:index.php');
    }
    $data=1;
    if(isset($_POST['name'])){
        include('config/database.php');
        $name=mysqli_real_escape_string($conn, $_POST['name']);
        $registrationNo=mysqli_real_escape_string($conn, $_POST['regno']);
        $section=mysqli_real_escape_string($conn, $_POST['section']);

        if(empty($name) || empty($registrationNo) || empty($section)){
            $data=0;
        }else{
            $query="INSERT into students(name,registrationNo,section) VALUES ('$name','$registrationNo','$section')";
            $result=mysqli_query($conn,$query);
            if($result == 1){
                header('location:bsection.php?add=success');
            }
            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Student Info</title>
</head>
<body>
    <?php include('config/header.php'); ?>
    <div class="container" style="width:100%;height:80vh">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5 mt-5 pt-5">
                <form action="student.php" method="POST">
                    <?php if($data==0){ ?>
                        <div class="alert alert-danger">Fields can not be empty</div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" placeholder="Enter student name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="regno">Registration No:</label>
                        <input type="number" id="regno" placeholder="Enter registration no" name="regno">
                    </div>
                    <div class="form-group">
                        <label for="section">Section:</label>
                        <input type="text" id="section" placeholder="Enter section" name="section">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Add Student</button>
                </form>
            </div>
        </div>
    </div>
    <?php include('config/footer.php'); ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>