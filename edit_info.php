<?php

include 'php/edit.php';

if (isset($_GET['id_client'])) {
    $id_client = $_GET['id_client'];
    include 'php/lire_edit.php';
    

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFER LES INFORMATION</title>
    <link rel="stylesheet" href="css/style.css">
  
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var passwordField2 = document.getElementById("passwordd");
            if (passwordField.type === "password" && passwordField2.type === "password") {
                passwordField.type = "text";
                passwordField2.type = "text";

            } else {
                passwordField.type = "password";
                passwordField2.type = "password";

            }
           
        }
    </script>
 
</head>
<body>
<center><p id="erreur1"><u><b><?php echo $result_mess1 ; ?></b></p></u></center>
<center><p id="erreur2"></u><b><?php echo $result_mess2 ; ?></b></p></u></center>

    <div id="div1">

                  
        
    <form action="" method="POST">
        
    <input type="text" 
			       name="id_client" 
			       value="<?=$user['id_client']?>"
			       hidden>
    
     <table>
        
        <tr>
            <td><label>Nom </label></td>
        </tr>
        <tr>

        <td>
            <input type="text" name="nom" value="<?=$user['nom']?>">
            <p class="bgcolor"><?php echo $nom_mess ?></p>
        </td>
        
        </tr>

        <tr>
            <td><label>Prenom </label></td>
        </tr>
        <tr>
            <td><input type="text" name="prenom" value="<?=$user['prenom']?>">
                <p class="bgcolor"><?php echo $prenom_mess ; ?></p></td>
        </tr>

        <tr>
            <td><label>Email </label></td>
        </tr>
        <tr>
            <td><input type="text" name="email" value="<?=$user['email']?>">
                <p class="bgcolor"><?php echo $email_mess ; ?></p></td>
        </tr>
        
        <tr>
            <td><label>Mote de Passe</label></td>
        </tr>
        <tr>
            <td><input type="password" name="password" id="password" value="<?=$user['password']?>">
                <p class="bgcolor"><?php echo $password_mess ; ?></p></td>
        </tr>
        <tr>
            <td><label> Confirm Mote de Passe </label></td>
        </tr>
        <tr>
            <td><input type="password" name="confpassword" id="passwordd" value="<?=$user['password']?>">
                <p class="bgcolor"><?php echo $confpassword_mess ; ?></p></td>
        </tr>
        <tr>
            <td ><input type="checkbox"  onclick="togglePassword()"><label> Check Mote de Passe </label></td>
            
        </tr>
        <tr>
            <td align="center">
        
            <a href="utilisateur.php"  style=" color:black; text-decoration: none; cursor: pointer;margin-top: 7%;padding:4%;border-radius: 10%;border: none;background-color: lightgray;width:max-content">< Retour</a>
    
            <input  type="submit" value="Edit" name="edit" id="submit" style="margin-left:30%;font-weight: bold;"> 
    
            </td>
        </tr>
       
     </table> 
     <center>

</form> 
    </div>
    

</body>
</html>