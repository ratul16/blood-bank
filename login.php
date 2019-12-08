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

    <title>Blood</title>

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

    <div class="card text-center shadow p-3 mb-5 bg-white rounded mx-auto" id="login_form">
        <div class="card-body">
            <h5 class="card-title"><i class="fas fa-user-circle"></i></h5>
            <form action="login.php" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" id="login-input" name="email" class="form-control" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" id="login-input" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="login" class="btn btn-danger">Login</button>

            </form>
        </div>
    </div>


    <?php
    session_start();

    if(isset($_POST['login'])){
            echo '<script type="text/javascript"> alert("Logged in xD !!")</script>';

            $email=$_POST['email'];
            $password=$_POST['password'];
            $query = "SELECT * FROM login WHERE email = '$email' AND password = ('$password')";
            
            $query_run = mysqli_query($con,$query);
                    if (mysqli_num_rows ($query_run) > 0) {
                    //vaild
                    $_SESSION['email']=$email;
                    header("location:profile.php");
                }
                else {
                    //Invaild
                    echo '<script type="text/javascript"> alert("Invaild Patient")</script>';
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