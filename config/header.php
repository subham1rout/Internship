<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-success p-2">
        <a class="navbar-brand ml-5" href="cbranch.php">
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
                <?php // if($_SESSION['branch']){?>
                <!-- <li class="nav-item px-2">
                    <a class="nav-link" href="bsection.php">Branch</a>
                </li> -->
                <?php 
                // }
                ?>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>