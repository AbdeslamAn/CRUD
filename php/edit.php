<?php

$nom_mess = $prenom_mess = $email_mess = $password_mess = $confpassword_mess = $result_mess1 = $result_mess2= '';

try {
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['edit'])){

        if (isset($_POST['id_client']) && isset($_POST['nom'])  && isset($_POST['prenom'] ) && isset($_POST['email']) && isset($_POST['password'])) {
            include 'conx.php';

            $id_client = htmlspecialchars($_POST['id_client']);
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $conf_password = htmlspecialchars($_POST['confpassword']);

            if (empty(trim($nom))) {
                $nom_mess = "Veuillez entrer votre nom";
            } elseif (empty(trim($prenom))) {
                $prenom_mess = "Veuillez entrer votre prénom";
            } elseif (empty(trim($email))) {
                $email_mess = "Veuillez entrer votre email";
            } elseif (empty(trim($password))) {
                $password_mess = "Veuillez entrer votre mot de passe";
            } elseif (empty(trim($conf_password))) {
                $confpassword_mess = "Veuillez confirmer votre mot de passe";
            } elseif ($password != $conf_password) {
                $confpassword_mess = "La confirmation du mot de passe est incorrecte";
            } else {
                // Hash the password before storing it in the database
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                
                $sql = "UPDATE client SET nom='$nom', prenom='$prenom', email='$email', password='$hashed_password' WHERE id_client='$id_client'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                     $result_mess1 = " Cette informations ont été mises à jour. ";
                } else {
                    $result_mess2 = " Échec de la mise à jour des informations. ";
                }
            }
        } else {
                echo "Des champs requis sont manquants dans la requête.";
            }

    }
} catch (Exception $e) {
    echo "Une erreur s'est produite : " . $e->getMessage();
}

