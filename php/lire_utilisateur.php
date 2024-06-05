<?php
try {

    include 'conx.php' ;

    $sql = "SELECT * from client";
    $result=mysqli_query($conn,$sql);


} catch (Exception $e) {
    echo "Error :  ". $e->getMessage() ;
}

