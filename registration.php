<?php
include "Connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Donor</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style.css">

    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/dfe881f618.js"></script>


</head>

<body>

    <div>
        <nav class="navbar navbar-light navbar-expand-md bg-dark navigation-clean-button">
            <div class="container-fluid"><a class="navbar-brand text-white" href="index.html"><i class="fas fa-ambulance"></i>&nbsp;Blood Doner</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">

                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" style="color:#ffffff;"><i class="fa fa-home"></i>&nbsp;Home</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="donorlist.php" style="color:#ffffff;"><i class="far fa-user-circle"></i>&nbsp;Doner</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php" style="color:#ffffff;"><i class="fas fa-id-badge"></i>&nbsp;Registration</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link text-monospace" href="login.php" style="color:#ffffff;"><i class="fas fa-user-shield"></i>&nbsp;Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="card text-center shadow p-3 mb-5 bg-white rounded mx-auto" id="regis">
        <div class="card-body">
            <h3 class="card-title">Registration <br><i class="fas fa-user-circle"></i><br></h3>
            <form action="registration.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="fname" placeholder="First Name">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="lname" placeholder="Last Name">
                </div>

                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="cpassword" placeholder="Re-enter Password">
                </div>

                <div class="input-group mb-3">
                    <select id="inputState" class="form-control" name="blood_group">
                        <option value="blank" selected>Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="phone" placeholder="Phone number">
                </div>

                <div class="input-group mb-3">
                    <input type="date" class="form-control" name="date" placeholder="Date of birth">
                </div>

                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="age" placeholder="Age">
                </div>

                <div class="input-group mb-3">
                    <select id="inputState" class="form-control" name="sex">
                        <option value="blank" selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <select id="inputState" class="form-control" name="area">
                        <option value="blank" selected>Select area</option>
                        <option value="Gulshan">Gulshan</option>
                        <option value="Banani">Banani</option>
                        <option value="Uttara">Uttara</option>
                        <option value="Mirpur">Mirpur</option>
                        <option value="Dhanmondi">Dhanmondi</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <select id="inputState" class="form-control" name="state">
                        <option value="blank" selected>Can you donate ?</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="about" placeholder="About yourself">
                </div>

                <button type="submit" name="registration" class="btn btn-success">Signup</button>

            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['registration'])) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $blood = $_POST['blood'];
        $phone = $_POST['phone'];
        $dob = $_POST['date'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $area = $_POST['area'];
        $about = $_POST['about'];
        $state = $_POST['state'];

        if ($password == $cpassword) {
            $query = "SELECT * FROM donor WHERE email = ('$email')";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                //already a user
                echo '<script type="text/javascript"> alert("User Already Exists.")</script>';
            } else {

                $query1 = "INSERT INTO donor (fname, lname, age, sex, blood_group, phone, dob, city, state, about) VALUES ('$fname','$lname','$age','$sex','$blood','$phone','$dob','$area','$state','$about')";

                $query2 = "INSERT INTO login (email, password) VALUES ('$email','$password')";

                $query_run = mysqli_query($con, $query1) && mysqli_query($con, $query2);
                if ($query_run) {
                    echo '<script type="text/javascript"> alert("Member Add Successfully !!")</script>';
                } else {
                    echo (mysqli_error($con));
                    echo '<script type="text/javascript"> alert("!! Error !!")</script>';
                }
            }

        } else {

            echo '<script type="text/javascript"> alert("Please Enter the Values")</script>';

        }
        
    }
    mysqli_close($con);
    ?>



    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <h5 class="text-uppercase text-center">Blood Doner</h5>
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="http://prantoamt.pythonanywhere.com"> Blood Doner.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->








    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>


</body>

</html>