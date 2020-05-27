<?php
    session_start();
    if(!$_SESSION['auth']){
        header('location:index.php');
    }
    $d=1;
    if(isset($_POST['submit'])){
        $branch=$_POST['branch'];
        if($branch==''){
            $d=0;
        }
        else{
            $url='bsection.php?branch='.$branch;
            header('location: '.$url);
            exit();
        }
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
        if($d==0){
            echo '<div class="alert alert-danger">Please select a branch!!!</div>';
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
            <li>MSc Physics</li>
        </ol>
    </section>
    <form class="container" action="cbranch.php" method="POST">
        <div class="form-group">
            <label for="branch"><h4>Get list of students of any branch:</h4></label>
            <select name="branch" id="branch" class="custom-select form">
                <option selected value="">Choose Branch</option>
                <option value="MCA">MCA</option>
                <option value="CSE">CSE</option>
                <option value="EE">EE</option>
                <option value="ME">ME</option>
                <option value="IT">IT</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-success" style="color:#fff">Submit</button>
    </form>
    <?php include('config/footer.php'); ?>
    </body>
</html>