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
    <title>BSection</title>
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
                <li class="nav-item px-3">
                    <a class="nav-link" href="cbranch.php">Home</a>
                </li>
                <!-- <li class="nav-item px-3">
                    <a class="nav-link" href="#">Branch</a>
                </li> -->
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="mt-3">
            <form action="#">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" id="date">
                </div>
                <button type="submit" class="btn-sm">Submit</button>
            </form>
        </div>
    </div>
    <div class="container">
        <h5 class="my-3">All students of MCA Branch:</h5>
        <div class="bs-table mt-2">
            <table class="table table-hover">
                <caption class="text-center">(List of Students)</caption>
                <thead>
                    <tr>
                        <th scope="col">Sl.No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Reg.No</th>
                        <th scope="col">Section</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Subham Rout</td>
                        <td>1805106027</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alok Parida</td>
                        <td>1805106022</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sibaprasad Baral</td>
                        <td>1805102002</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Devidutta Rath</td>
                        <td>1805102001</td>
                        <td>D</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Amiya Ranjan Rout</td>
                        <td>1805162002</td>
                        <td>B</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>