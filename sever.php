<?php

    $servrtname = "localhost";
    $username = "somsri";
    $passsword = "Thebest";
    $dbname = "ptont";

    $conn = mysqli_connect($servername, $username,$password,$dbname);

    if(!$conn) {
        die("connection falled". mysqli_connect_error());
    } else { 
        echo "connected successfully"
    }
    
?>