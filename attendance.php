<?php
    session_start();
    if(!$_SESSION['auth']){
        header('location:index.php');
    }
    $b=false;
    $a=1;
    include('config/database.php');
    if(isset($_POST['submit'])){
        $att=$_POST['attendance'];
        $date= $_POST['date'];

        $query="SELECT date from attendance";
        $result=mysqli_query($conn, $query);
        
        if($result->num_rows > 0){
            while($check= $result-> fetch_assoc()){
                if($date === $check['date']){
                    $b=true;
                    $a=2;
                }else if($date > date('Y-m-d')){
                    $b=true;
                    $a=3;
                }elseif($date < date('Y-m-d')){
                    $b=true;
                    $a=4;
                }
            }
        }
        if(!$b){
            foreach($att as $key => $value){
                if($value=="Present"){
                    $query="INSERT into attendance(date,status,student_id) values('$date','P','$key')";
                    $insertResult=$conn->query($query);
                }
                else{
                    $query="INSERT into attendance(date,status,student_id) values('$date','A','$key')";
                    $insertResult=$conn->query($query);
                }
            }
            if($insertResult){
                header('location:bsection.php?insert=success');
                // echo "<div class='alert alert-danger'>Attendance successfully taken!!!</div>";
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
    <title>Attendance</title>
</head>
<body>
    <?php include('config/header.php'); ?>
    <?php if($a==2){
            echo "<div class='alert alert-danger'>Attendance already taken today!!!</div>";
        }elseif($a==3){
            echo "<div class='alert alert-danger'>You can not take attendance of future!!!</div>";
        }elseif($a==4){
            echo "<div class='alert alert-danger'>You can not edit attendance of past!!!</div>";
        }
    ?>
    <div class="container">
        <h5 class="my-3 font-italic text-center" style="letter-spacing: 0.2rem;word-spacing: 0.3rem;text-transform:uppercase;">Take Attendance of MCA students</h5>
        <form action="attendance.php" method="POST">
            <div class="form-group d-inline-block py-2">
                <label for="date">Select Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <table class="table table-striped text-center">
            <tr>
                <th>Serial No</th>
                <th>Student Name</th>
                <th>Registration No</th>
                <th>Section</th>
                <th>Attendance Status</th>
            </tr>
            <?php
                $result=mysqli_query($conn, "SELECT * from students");
                $serno=0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $serno++;
            ?>
            <tr>
                <td><?php echo $serno; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['registrationno']; ?></td>
                <td><?php echo $row['section'] ?></td>
                <td>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-sm btn-success">
                            <input required type="radio" name="attendance[<?php echo $row['id']; ?>]" value="Present" id="pres[<?php echo $row['id']; ?>]" autocomplete="off">Present
                        </label>
                        <label class="btn btn-sm btn-danger">
                            <input required type="radio" name="attendance[<?php echo $row['id']; ?>]" value="Absent" id="abs[<?php echo $row['id']; ?>]" autocomplete="off" checked>Absent
                        </label>
                    </div>

                    <!-- <input required type="radio" name="attendance[<?php echo $row['id']; ?>]" value="Present" id="pres[<?php echo $row['id']; ?>]"><label for="pres[<?php echo $row['id']; ?>]">Present</label>
                    <input required type="radio" name="attendance[<?php echo $row['id']; ?>]" value="Present" id="pres[<?php echo $row['id']; ?>]"><label for="pres[<?php echo $row['id']; ?>]">Present</label> -->
                </td>
            </tr>
            <?php
                    }
                }
            ?>
            </table>
            <input type="submit" class="btn btn-secondary" name="submit">
        </form>
    </div> 
    <?php include('config/footer.php'); ?>
</body>
</html>