<?php
    $db_host = "us-cdbr-east-06.cleardb.net";
    $db_user = "b3d7b2cededcbc";
    $db_pass = "e843d006";
    $db_name = "heroku_af4e8b942d64443";
        
    #$con = mysqli_connect("127.0.0.1","root","","neighbourhood");
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
