<?php
$result_mess='';
try {
    if (isset($_GET['id_client'])) {
    include 'conx.php';
  
    $userId=$_GET['id_client'];
    $nom=$_GET['nom'];
    

    $sql="DELETE FROM client WHERE id_client=$userId";
    $result=mysqli_query($conn,$sql);

    if($result){
        
        $result_mess="cette utilisateur et supprimer";
    }  
    else {
        $result_mess="Cette utilisateur pas supprimer";
    }
    // aficher le message d'erreur sur le Url 
    header("Location: ../utilisateur.php?ms=" . urlencode($result_mess));
    exit();
}  

}
catch (Exception $e) {
    echo 'Error :  '.$e->getmessage();
}
