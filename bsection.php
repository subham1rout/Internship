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
    <?php include('config/header.php'); ?>
    <?php 
        if(!isset($_GET['insert'])){
        // exit();
        }else{
            $att=$_GET['insert'];
            if($att == "success"){
                echo "<p class='alert alert-success'>Attendance taken successfully!!!</p>";
            }
        }
    ?>
    <?php 
        if(!isset($_GET['add'])){
        // exit();
        }else{
            $add=$_GET['add'];
            if($add == "success"){
                echo "<p class='alert alert-success'>Student added successfully!!!</p>";
            }
        }
    ?>
    <div class="container">
        <div class="mt-3">
            <a href="student.php" class="btn-sm btn-success">Add Student</a>
            <a href="attendance.php" class="btn-sm btn-success pull-right">Take Attendance</a>
        </div>
    </div>
    <div class="container">
        <h5 class="my-3 font-italic text-center" style="letter-spacing: 0.2rem;word-spacing: 0.3rem;text-transform:uppercase;">All students of MCA Branch</h5>
        <div class="bs-table mt-2">
            <table class="table table-hover table-striped">
                <!-- <caption class="text-center">(List of Students)</caption> -->
                <thead>
                    <tr>
                        <th scope="col">Sl.No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Reg.No</th>
                        <th scope="col">Section</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include('config/database.php');
                    $sql = "SELECT name, registrationno, section FROM students";
                    $result = $conn->query($sql);
                    // $result=mysqli_query($conn, $sql);
                    $serno=0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $serno++;
                            echo 
                                "<tr>
                                    <td>".$serno."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['registrationno']."</td>
                                    <td>".$row['section']."</td>
                                </tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
        
            <!-- // $sql = "SELECT name, registrationno, section FROM students";
            // $result = $conn->query($sql);
            // if ($result->num_rows > 0) {
            //     // output data of each row
            //     echo 'hoo';
            //     while($row = $result->fetch_assoc()) {
            //         echo "<br> id: ". $serno. " - Name: ". $row["name"]. " " . $row["registrationno"] . "<br>". " " . $row["section"] . "<br>";
            //     }
            // } else {
            //     echo "0 results";
            // }

            // $conn->close(); -->
            
    </div>
    <?php include('config/footer.php'); ?>
</body>
</html>