<?php 
    session_start();
    error_reporting(0);
    include('includes/dbconnection.php');


    $ret=mysqli_query($con,"select * from  tblservices WHERE type = '".$_GET['service']."';");

    $cnt=1;

    $time_arr = [];

    while ($row=mysqli_fetch_array($ret)) {
        $time_arr[] = $row['ServiceName'];
        $cnt=$cnt+1;
    }

    echo json_encode($time_arr);
?>
       

