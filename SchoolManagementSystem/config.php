<?php 
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = new mysqli($server, $username, $password, 'studentdata');
        if (!$con) {
            die("Connection To The Server Lost due to " . mysqli_connect_error());
        } 
        
?>
