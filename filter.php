<?php
   include_once "Connect.php";
   ?>
   <?php
      if(isset($_POST['Yes']))
      {
         //echo '<script type="text/javascript"> alert("Searched !!")</script>';
         $name = $_POST['Yes'];
         
         $querys = "SELECT * from donor where blood_group Like '%$name%' or state Like 'YES'";
         $query_run = mysqli_query($con,$querys);
if (mysqli_num_rows ($query_run)> 0) {
   while ($result = $query_run -> fetch_assoc()) {
      $fname = $result['fname'];
      $lname = $result['lname'];
      $age = $result['age'];
      $Available=$result['state'];
      $Gender=$result['sex'];
      $Blood_G=$result['blood_group'];
      $Phone=$result['phone'];
      $City=$result['city'];
  
    
    }
}
else {
   echo "No resutls";
}
   }
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style.css">

    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/dfe881f618.js"></script>


</head>
<body>
<div class="container">
                <div id="doner-info">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center text-danger text-uppercase">Donor List</h3><br>
                            <table class="table table-hover table-responsive-md text-center">
                            <thead style="color:#ffffff;">
                                    <tr class="bg-danger">
                                        <th scope="col">Name</th>
                                        <th scope="col">Availability</th>
                                        <th cope="col">Age </th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Blood Group</th>
                                        <th scope="col">Phone#</th>
                                        <th scope="col">City</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                    <td style="width:600px;"><?php echo $fname.' '.$lname;?></td>
                                    <td style="width:300px;"><?php echo $Available;?></td>
                                    <td style="width:200px;"><?php echo $age;?></td>
                                    <td style="width:400px;"><?php echo $Gender;?></td>
                                    <td style="width:300px;"><?php echo $Blood_G;?></td>
                                    <td style="width:600px;"><?php echo $Phone;?></td>
                                    <td style="width:400px;"><?php echo $City;?></td>
                                    </tr></tbody>

                                </table>
        <div>
            <button id="Back" type="button" class="btn btn-danger"><a href="index.html" style="color:#eeeee;"><strong>BACK</strong></a></button>
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