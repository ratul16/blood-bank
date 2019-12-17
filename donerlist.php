<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Donor</title>

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
            <div class="container-fluid"><a class="navbar-brand text-white" href="index.html"><i
                        class="fas fa-ambulance"></i>&nbsp;Blood Doner</a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
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



            <div class="container">
                <div id="doner-info">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center text-danger text-uppercase">Doner List</h3><br>
                            <table class="table table-hover table-responsive-md text-center">

                                <div class="input-group mb-3">
                                    <select id="inputState" action="filter.php" method="POST" class="form-control" name="filter" >
                                        <option selected>Filter</option>
                                        <option name="Available" type="submit" class="searchbutton" value="Yes">Available</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                                <thead style="color:#ffffff;">
                                    <tr class="bg-danger">
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Blood Group</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">State</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td style="width:600px;">Ramiza Maliha</td>
                                        <td style="width:400px;">demo@gmail.com</td>
                                        <td style="width:300px;">O+</td>
                                        <td style="width:400px;">Kakrail</td>
                                        <td style="width:600px;">01657854494</td>
                                        <td style="width:200px;">Yes</td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="width:600px;">Israt Jahan Diya</td>
                                        <td style="width:400px;">demo@gmail.com</td>
                                        <td style="width:300px;">B+</td>
                                        <td style="width:400px;">Kakrail</td>
                                        <td style="width:600px;">016455194494</td>
                                        <td style="width:200px;">Yes</td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="width:600px;">Hasibul Alam Ratul</td>
                                        <td style="width:400px;">demo@gmail.com</td>
                                        <td style="width:300px;">O-</td>
                                        <td style="width:400px;">Mirpur</td>
                                        <td style="width:600px;">01654194494</td>
                                        <td style="width:200px;">No</td>
                                    </tr>

                                    <tr>
                                        <td style="width:600px;">Sadia Sheikh</td>
                                        <td style="width:400px;">demo@gmail.com</td>
                                        <td style="width:300px;">0+</td>
                                        <td style="width:400px;">Motijhil</td>
                                        <td style="width:600px;">016574494</td>
                                        <td style="width:200px;">Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>


</body>

</html>