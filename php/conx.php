<?php 

    $hostname ='localhost';
    $username='root';
    $password= '';
    $db='getion';


        $conn=mysqli_connect($hostname, $username, $password, $db);

    if(!$conn){
        die('connection failed :'.mysqli_connect_error());
    }
