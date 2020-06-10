<?php
    session_start();
    if(!$_SESSION['auth']){
        header('location:index.php');
    }   

    include('config/database.php');
    $work=0;
    $date;
    if(isset($_POST['submit'])){
        $date=$_POST['date'];
       
        $query="SELECT * from attendance";
        $result=mysqli_query($conn, $query);
        while($w = $result->fetch_assoc()){
            if($date == $w['date']){
                $work=1;
                break;
            } 
            else{
                $work=2;
            }
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
    <title>Attendance View</title>
</head>
<body>
    <?php include('config/header.php') ?>
    <div class="container">
        <h5 class="text-center my-4 font-italic">Now You Can Get Attendance Report Of Any Date</h5>
        <form action="atnd_view.php" method="POST" class="container my-3">
            <div class="forms-group d-inline">
                <label for="date">Enter Date:</label>
                <input type="date" id="date" name="date" style="width:10rem;height:2rem;" required>
            </div>
            <button type="submit" name="submit" class="btn-sm btn-success">Submit</button>
        </form>

    <?php 
        if($work == 2){
            echo '<div class="text-center font-italic">No Record Found!!!</div>';
        }
        if($work==1){ 
    ?>
        <table class="table table-striped">
            <tr>
                <th class="text-center">Sr.No.</th>
                <th>Name</th>
                <th class="text-center">Registration No</th>
                <th class="text-center"><?php echo $date ?></th>
            </tr>
            <?php
                $query="SELECT * from attendance";
                $result=mysqli_query($conn, $query);
                $serno=0;
                while($row = $result->fetch_assoc()){
                    if($date == $row['date']){
                        $serno+=1;
            ?>          
                        <tr>
                            <td class="text-center"><?php echo $serno; ?></td>

                            <?php 
                                $id=$row['student_id']; 
                                $squery="SELECT * from students where id=$id";
                                $sresult=mysqli_query($conn, $squery);
                                // print_r ($sresult);
                                if($srow = $sresult->fetch_assoc()){
                            ?>
                                <td><?php echo $srow['name']; ?></td>
                                <td class="text-center"><?php echo $srow['registrationno'] ?></td>
                            <?php
                                }
                            ?>

                            <td class="text-center"><?php echo $row['status'] ?></td>
                        </tr>
            <?php
                    }
                }
            ?>
            <tr>
                <td><?php  ?></td>
            </tr>
        </table>
    <?php
        }
    ?>

        
    </div>
    <?php //include('config/footer.php') ?>
</body>
</html>