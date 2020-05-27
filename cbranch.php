<?php
    session_start();
    if(!$_SESSION['auth']){
        header('location:index.php');
    }
    if(isset($_POST['submit'])){
        echo 'hii';
        $name=$_POST['branch'];
        echo $name;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CBranch</title>
</head>
<body>
    <?php
        include('config/header.php');
        if(!isset($_GET['signup'])){
            // exit();
        }
        else{
            $signupCheck=$_GET['signup'];
            if($signupCheck == "success"){
                echo "<p class='alert alert-success'>Signup Successfully!!!</p>";
            }
        }
        if(!isset($_GET['login'])){
            // exit();
        }
        else{
            $signupCheck=$_GET['login'];
            if($signupCheck == "success"){
                echo "<p class='alert alert-success'>Login Successfully!!!</p>";
            }
        }
    ?>
    <section class="container my-3" style="line-height: 1.9rem;"> 
        <h4 class="mp-1">List of Branches in <i>TechHub</i> are</h4>
        <ol class="container mb-3">
            <li>Master in computer application.</li>
            <li>Computer science and engineering.</li>
            <li>Information Technology.</li>
            <li>Electrical engineering.</li>
            <li>Mechanical engineering.</li>
            <li>Civil engineering.</li>
            <li>Architectural engineering.</li>
            <li>B.Plan</li>
        </ol>
    </section>
    <form class="container" action="cbranch.php" method="POST">
        <div class="form-group">
            <label for="branch"><h4>Get list of students of any branch:</h4></label>
            <select id="branch" class="custom-select form">
                <option selected>Choose Branch</option>
                <option value="MCA" name="branch" required>MCA</option>
                <option value="CSE" name="branch" required>CSE</option>
                <option value="EE" name="branch" required>EE</option>
                <option value="ME" name="branch" required>ME</option>
                <option value="ME" name="branch" required>IT</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-success" style="color:#fff">Submit</button>
    </form>
    <?php include('config/footer.php'); ?>
    </body>
</html>