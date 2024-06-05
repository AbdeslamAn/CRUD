<?php

include 'conx.php';
try {
    if (isset($_GET['id_client'])) {
       
   
    

    $id_client=$_GET['id_client'];



    $sql="SELECT *  FROM client WHERE id_client ='$id_client'";
    $result=mysqli_query($conn,$sql);

    
    }

    else {
        $error_message = mysqli_error($conn);
        echo "Database query error: " . $error_message;

    }


}
   

 catch (Exception $e) {
    echo 'error : '. $e->getMessage();
}




