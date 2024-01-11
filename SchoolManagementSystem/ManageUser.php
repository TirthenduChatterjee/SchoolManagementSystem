<?php
if (isset($_POST['SearchBtn']) and isset($_POST['Search'])) {
    include 'config.php';
    $Search = $_POST['Search'];
    $sql = "SELECT*  FROM `studentdata` WHERE CONCAT(`Name`,`DOB`,`Mobile`,`EmailAddress`,`Address`,`Gender`,`Class`,`YOA`) LIKE '%$Search%'";
    $result = mysqli_query($con, $sql);
    $temp = false;
} else {
    include 'config.php';
    $sql = "SELECT * FROM `studentdata`";
    $result = mysqli_query($con, $sql);
    $temp = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard : Manage Students</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css\AddUser.css">


</head>

<body>




    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dashboard</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="DashboardHome.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AddUser.html">Add Student</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="ManageUser.php">Manage Student
                                Database</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="logout" href="Home1.html">Log Out</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>





    <div class="container">
        <h2 class="mt-5 mb-5">
            Manage Student Details
        </h2>
        <form method="POST" class="d-flex mt-3">
            <input name="Search" class="form-control me-2" placeholder="Search Student by Name">

            <button name="SearchBtn" class="btn btn-success">Search</button>
        </form>

        <div class="mb-5">
            <hr>
            <div class="row mt-5">
                <div class="col-12">
                    <table class="table table-dark table-striped table-bordered" id="studentTable">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Grade</th>
                                <th>YOA</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($temp) {
                                $No = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $Sno = $row['Sno.'];
                                    $Namee = $row['Name'];
                                    $DOB = $row['DOB'];
                                    $Mobile = $row['Mobile'];
                                    $Email = $row['EmailAddress'];
                                    $Address = $row['Address'];
                                    $Gender = $row['Gender'];
                                    $Grade = $row['Class'];
                                    $YOA = $row['YOA'];
                                    echo '<tr>
       <td>' . $No . '</td>
       <td>' . $Namee . '</td>
       <td>' . $DOB . '</td>
       <td>' . $Mobile . '</td>
       <td>' . $Email . '</td>
       <td>' . $Address . '</td>
       <td>' . $Gender . '</td>
       <td>' . $Grade . '</td>
       <td>' . $YOA . '</td>
       <td>
       <button class="btn btn-danger"><a href = "delete.php?deleteid=' . $Sno . '" style=text-decoration:none;color:white;>Delete</a></button> </td>
       <td><button class="btn btn-warning"><a href ="edit.php?editid=' . $Sno . '"style=text-decoration:none;color:white;>Edit</a></button>
       </td> 
       </tr>';
                                    $No++;
                                }
                                $con->close();
                            } else {
                                if ($result) {
                                    $No = 1;
                                    foreach ($result as $row) {
                                        $Sno = $row['Sno.'];
                                        $Namee = $row['Name'];
                                        $DOB = $row['DOB'];
                                        $Mobile = $row['Mobile'];
                                        $Email = $row['EmailAddress'];
                                        $Address = $row['Address'];
                                        $Gender = $row['Gender'];
                                        $Grade = $row['Class'];
                                        $YOA = $row['YOA'];

                                        echo '<tr>
   <td>' . $No . '</td>
   <td>' . $Namee . '</td>
   <td>' . $DOB . '</td>
   <td>' . $Mobile . '</td>
   <td>' . $Email . '</td>
   <td>' . $Address . '</td>
   <td>' . $Gender . '</td>
   <td>' . $Grade . '</td>
   <td>' . $YOA . '</td>
   <td>
   <button class="btn btn-danger"><a href = "delete.php?deleteid=' . $Sno . '" style=text-decoration:none;color:white;>Delete</a></button> </td>
   <td><button class="btn btn-warning"><a href ="edit.php?editid=' . $Sno . '"style=text-decoration:none;color:white;>Edit</a></button>
   </td> 
   </tr>';
                                        $No++;
                                    }
                                } else {
                                    echo '<h1>NO DATA FOUND !</h1>';
                                }

                                $con->close();

                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" -->
        integrity = "sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin = "anonymous" ></script>
</body>

</html>