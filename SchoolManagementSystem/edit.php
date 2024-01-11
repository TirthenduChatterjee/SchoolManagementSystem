<?php
$temp = false;
include 'config.php';
if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $sql = "select*from `studentdata`where `Sno.`=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $Name = $row['Name'];
    $DOB = $row['DOB'];
    $Mobile = $row['Mobile'];
    $Email = $row['EmailAddress'];
    $Grade = $row['Class'];
    $Address = $row['Address'];
    $YOA = $row['YOA'];
    $Gender = $row['Gender'];
    if (isset($_POST['Update'])) {
            $Name = $_POST['Name2'];
            $DOB = $_POST['DOB'];
            $Mobile = $_POST['Mobile'];
            $Email = $_POST['Email'];
            $Grade = $_POST['Grade'];
            $Address = $_POST['Address'];
            $YOA = $_POST['YOA'];
            $Gender = $_POST['Gender'];

            $sql = "UPDATE `studentdata` SET  `Name`='$Name',`DOB` ='$DOB',`Mobile`='$Mobile',`EmailAddress`='$Email',`Class`='$Grade',`Address`='$Address',`YOA`='$YOA' ,`Gender`='$Gender' WHERE `Sno.`=$id";
            $result = mysqli_query($con, $sql);
            header('location:ManageUser.php');
            $con->close();
        }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard : Add Students</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css\addUser.css">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Admin Dashboard</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="DashboardHome.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="AddUser.php">Add Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ManageUser.php">Manage Student Database</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="logout">Log Out</a>
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
            Add Student Details
        </h2>
        <form method="post">
            <div class="mb-5">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="Name2">Name</label>
                        <input type="text" name="Name2" class="form-control" id="Name2"
                            placeholder="Enter Student Name" value="<?php echo $Name;?>">
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="DOB">Date of Birth</label>
                        <input type="date" name="DOB" class="form-control" id="DOB" placeholder="Enter Date of Birth" value="<?php echo $DOB;?>">
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="Mobile">Mobile</label>
                        <input type="Mobile" name="Mobile" class="form-control" id="Mobile"
                            placeholder="Enter mobile number" value="<?php echo $Mobile;?>">
                    </div>


                    <div class="form-group col-md-6 mb-3">
                        <label for="Email">Email</label>
                        <input type="email" name="Email" class="form-control" id="Email" placeholder="Enter Email" value="<?php echo $Email;?>">
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="Address" class="form-control" id="Address" placeholder="Enter Address" value="<?php echo $Address;?>">
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="Gender">Gender</label>
                        <select id="Gender" name="Gender" class="form-control">
                            <option value="<?php echo $Gender?>" style="color: black; text-align: center;" disabled selected option>--Select Gender--
                            </option>
                            <option name ="Male" style="color: black;">Male</option>
                            <option name ="Female" style="color: black;">Female</option>
                            <option name = "Others" style="color: black;">Others</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="Grade">Grade</label>
                        <select id="Grade" name="Grade" class="form-control">
                            <option style="color: black; text-align: center;" disabled selected option>--Select Grade--
                            </option>
                            <option style="color: black;">I</option>
                            <option style="color: black;">II</option>
                            <option style="color: black;">III</option>
                            <option style="color: black;">IV</option>
                            <option style="color: black;">V</option>
                            <option style="color: black;">VI</option>
                            <option style="color: black;">VII</option>
                            <option style="color: black;">VIII</option>
                            <option style="color: black;">IX</option>
                            <option style="color: black;">X</option>
                            <option style="color: black;">XI</option>
                            <option style="color: black;">XII</option>

                        </select>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="YOA">Year of Admission</label>
                        <input type="date" name="YOA" class="form-control" id="YOA"
                            placeholder="Enter Date of Admission" value ="<?php echo $YOA;?>">
                    </div>


                    <div class="col-lg-12 mt-5">                     
                        <button class="btn btn-primary" name="Update">Update</button>
                    </div>
                </div>
        </form>
        <hr>
        <!-- <div class="row mt-5">
            <div class="col-12">
                <table class="table table-dark table-striped table-bordered" id="studentTable">
                    <thead>
                        <tr>
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

                    </tbody>
                </table>
            </div>
        </div> -->
    </div>
    </div>
    <script src="js\Adduser.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>