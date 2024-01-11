<?php
$temp=false;
include 'config.php';
if (isset($_POST['Submit'])) {
$Namee = $_POST['Name2'];
$DOB = $_POST['DOB'];
$Mobile = $_POST['Mobile'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$Gender = $_POST['Gender'];
$Grade = $_POST['Grade'];
$YOA =$_POST['YOA'];
    if ($Namee != "" && $DOB != "" && $Mobile != "" && $Email !="" && $Address != "" && $Gender!="" && $Grade != "" && $YOA != "") {
$sql = "INSERT INTO `studentdata` (`Name`, `DOB`, `Mobile`, `EmailAddress`, `Class`, `Address`, `YOA`, `Gender`) VALUES('$Namee', '$DOB', '$Mobile', '$Email', '$Grade', '$Address', '$YOA', '$Gender')";
$result = mysqli_query($con, $sql);
    }
if ($result) {
    $temp = true;
    header('location:AddUser.html');
}
}

?>