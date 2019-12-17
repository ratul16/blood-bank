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
                        <div id="searchbox">
                            <form id="spage" action="search.php" method="POST">
                                <input name="name" type="text" class="searchinput" autocomplete="off" placeholder="Name or Blood group" />

                                <input name="search" type="submit" class="searchbutton" value="Search" />
                        </div>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" style="color:#ffffff;"><i class="fa fa-home"></i>&nbsp;Home</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="donorlist.php" style="color:#ffffff;"><i class="far fa-user-circle"></i>&nbsp;Doner</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php" style="color:#ffffff;"><i class="fas fa-id-badge"></i>&nbsp;Registration</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link text-monospace" href="login.php" style="color:#ffffff;"><i class="fas fa-user-shield"></i>&nbsp;Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div class="container">
        <div class="row" id="profile">
            <div class="col-md-10">
                <div class="card bg-light" style="margin-top:20px; width:1100px;">
                    <div class="card-body" style="margin-left:20px;"><img class="rounded-circle" src="img/avater.png" style="width:150px;height:150px;">
                        <h4 class="card-title" style="padding-top:20px;">Hasibul Alam Ratul<h4>
                                <h5> Email : demo@gmail.com </h5>
                                <h5>Age : 24</h5>
                                <h5>Sex &nbsp;: Male</h5>
                                <h5>Date of Birth : 16th,Sept</h5>
                                <h5>Blood Group : O-</h5>
                                <h5>Phone : 456492318494</h5>
                                <h5>City : Mirpur</h5>
                                <h5>Doner ID : 232</h5>
                                <br>
                                <button type="button" class="btn btn-info"><a href="doctor.php" style="color:#ffffff;">Can donate</a></button>
                                <button type="button" class="btn btn-warning"><a href="doctor.php" style="color:#ffffff;">Can't donate</a></button>
                    </div>
                </div>
                <br>

            </div>
            <div class="col-md-2">
                <button id="logout" type="button" class="btn btn-danger"><a href="doctor.php" style="color:#ffffff;">Logout</a></button>
            </div>
            <div class="col-md-2">
                <small class="text-danger">Remove profile ? </small><br>
                <button type="button" id="logout" class="btn btn-danger"><a href="doctor.php" style="color:#ffffff;">Delete</a></button>
            </div>
        </div>

    </div>


    <div class="card" id="post">
        <div class="card-header text-center text-danger">
            <strong>Blood Request</strong>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="Name" class="form-control" placeholder="Enter paitent's fullname">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Number of blood bag</label>
                    <select class="form-control" name="nbag">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Select Blood Group</label>
                    <select id="inputState" class="form-control" name="blood">
                        <option value="blank"></option>
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

                <div class="form-group">
                    <textarea class="form-control" name="discrip" rows="4" placeholder="Enter discription..."></textarea>
                </div>
            </form>
        </div>
    </div>

    </div>





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