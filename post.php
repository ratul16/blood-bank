<?php
    include_once "Connect.php";
   
    if (isset($_POST['submitrequest'])) {
        $name=$_POST['name'];
        $Urgent=$_POST['nbag'];
        $Phone=$_POST['Phone'];
        $Blood_G= $_POST['blood'];
        $City=$_POST['city'];
        $Remark=$_POST['discrip'];  

        $query= "INSERT INTO post (Blood_G, Name, phone, city, urgency, S_Remark) VALUES ('$Blood_G','$name','$Phone','$City','$Urgent','$Remark')";
        $query_run = mysqli_query($con, $query);
        if ($query_run) {
            echo '<script type="text/javascript"> alert("Member Add Successfully !!")</script>';
        } else {
            echo (mysqli_error($con));
            echo '<script type="text/javascript"> alert("!! Error !!")</script>';
        }
    }
    ?>
    <html>
        <button id="Back" type="button" class="btn btn-success"><a href="profile.php" style="color:#ffffff;"><strong>BACK TO PROFILE</strong></a></button>                
    </html>