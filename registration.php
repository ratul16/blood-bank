<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MedTrans</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style.css">

    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/dfe881f618.js"></script>


</head>

<body>

    <div>
        <nav class="navbar navbar-light navbar-expand-md bg-dark navigation-clean-button">
            <div class="container-fluid"><a class="navbar-brand text-white" href="index.html"><i class="fas fa-ambulance"></i>&nbsp;Blood Doner</a><button class="navbar-toggler" data-toggle="collapse"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">

                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html"
                                style="color:#ffffff;"><i class="fa fa-home"></i>&nbsp;Home</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="doclist.php"
                                style="color:#ffffff;"><i class="far fa-user-circle"></i>&nbsp;Doner</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="registartion.php"
                                style="color:#ffffff;"><i class="fas fa-id-badge"></i>&nbsp;Registration</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link text-monospace" href="login.php"
                                style="color:#ffffff;"><i class="fas fa-user-shield"></i>&nbsp;Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

        <div class="card text-center shadow p-3 mb-5 bg-white rounded mx-auto" id="regis">
            <div class="card-body">
                <h3 class="card-title">Registration <br><i class="fas fa-user-circle"></i><br></h3>
                <form action="signup.php" method="post">
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
                        <select id="inputState" class="form-control" name="blood">
                            <option selected>Select Blood Group</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
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
                        <select id="inputState" class="form-control" name="area">
                            <option selected>Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
        
                    <div class="input-group mb-3">
                        <select id="inputState" class="form-control" name="area">
                            <option selected>Select area</option>
                            <option>Gulshan</option>
                            <option>Banani</option>
                            <option>Uttrara</option>
                            <option>Mirpur</option>
                            <option>Dhanmondi</option>
                        </select>
                    </div>
                    <button type="submit" name="signup" class="btn btn-success">Signup</button>
        
                </form>
            </div>
        </div>
    
   <?php
   if (isset($_POST['signup'])) {
     
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $cpassword=$_POST['cpassword'];
      $blood=$_POST['blood'];
      $phone=$_POST['phone'];
      $date=$_POST['date'];
      $age=$_POST['age'];
      $area=$_POST['area'];

      if ($password == $cpassword) {
         $query = "SELECT * FROM donor WHERE email = ('$email')";
         $query_run = mysqli_query ($con,$query);

         if (mysqli_num_rows($query_run) > 0) {
            //already a user
            echo '<script type="text/javascript"> alert("User Already Exists.")</script>';
         }

         else {
            $query1 = "INSERT INTO donor (fname,lname,email,password,blood,phone,date,age,area)
            VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['blood']."','".$_POST['phone']."','".$_POST['date']."','".$_POST['age']."','".$_POST['area']."')";

            $query2 =  "INSERT INTO login (email,password) VALUES ('".$_POST['email']."','".md5($_POST['password'])."')";

            $query_run = mysqli_query ($con,$query1) && mysqli_query ($con,$query2);
            if ($query_run) {
               echo '<script type="text/javascript"> alert("Member Added Successfully")</script>';
            }
            else {
               echo '<script type="text/javascript"> alert("There was a problem in adding member.")</script>';
            }
         }
      }
      else {
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>


</body>

</html>
