
<?php
header('Access-Control-Allow-Origin: *');
require "Connect.php";
$state = $_GET['state'];

$sql_query = "UPDATE `donor` SET `state`= '$state' WHERE `uId` = 1";

$result = mysqli_query($con, $sql_query);
if($result)
{
    echo "state_changed";
    // while ($row = mysqli_fetch_assoc($result))
    //     {
    //         $array[] = $row;
    //     }
}
else
{
    echo mysqli_error($con);
}
?>