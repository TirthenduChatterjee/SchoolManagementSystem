<?php 
 include 'config.php';
    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];
        $query= "DELETE FROM `studentdata` WHERE `studentdata`.`Sno.`=$id";
        $result = mysqli_query($con,$query);
    }
    if ($result) {
        header('location:ManageUser.php');
        $con->close();
    }
    else{
        die("deletion error due to ".mysqli_error($con));
    }
 
?>