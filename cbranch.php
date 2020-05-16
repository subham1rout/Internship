<?php
    session_start();
    if(!$_SESSION['auth']){
        header('location:index.php');
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
    <nav class="navbar navbar-expand-md navbar-light bg-success p-2">
        <a class="navbar-brand ml-5" href="cbranch.html">
            <h4 class="d-inline">TechHub</h4>
            <small class="d-block font-italic">A Technical Institution.</small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" style="font-size: 19px;">
                <li class="nav-item px-2 active">
                    <a class="nav-link" href="cbranch.php">Home</a>
                </li>
                <!-- <li class="nav-item px-2">
                    <a class="nav-link" href="#">Branch</a>
                </li> -->
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
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
    <form class="container my-3" action="bsection.php" method="POST">
        <label for="branch">
            <h4>Get list of students of any branch:</h4>
        </label>
        <select id="branch" class="custom-select">
            <option selected>Choose Branch</option>
            <option value="MCA">MCA</option>
            <option value="CSE">CSE</option>
            <option value="EE">EE</option>
            <option value="ME">ME</option>
        </select>
        <button type="submit" class="btn btn-success my-2">Submit</button>
    </form>
</body>

</html>