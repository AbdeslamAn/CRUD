<?php

include 'php/ajouter.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Un Utilisateur</title>
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
    <div id="div1">
        <?php echo $result_mess ; ?>
    <form action="" method="POST">
        
    
     <table>
        
        <tr>
            <td><label>Nom </label></td>
        </tr>
        <tr>

        <td>
            <input type="text" name="nom" value="<?php echo $nom ?>">
            <p class="bgcolor"><?php echo $nom_mess ?></p>
        </td>
        
        </tr>

        <tr>
            <td><label>Prenom </label></td>
        </tr>
        <tr>
            <td><input type="text" name="prenom" value="<?php echo $prenom ?>">
                <p class="bgcolor"><?php echo $prenom_mess ; ?></p></td>
        </tr>

        <tr>
            <td><label>Email </label></td>
        </tr>
        <tr>
            <td><input type="text" name="email" value="<?php echo $email ?>">
                <p class="bgcolor"><?php echo $email_mess ; ?></p></td>
        </tr>
        
        <tr>
            <td><label>Mote de Passe</label></td>
        </tr>
        <tr>
            <td><input type="password" name="password" id="password" value="<?php echo $password ?>">
                <p class="bgcolor"><?php echo $password_mess ; ?></p></td>
        </tr>
        <tr>
            <td><label> Confirm Mote de Passe </label></td>
        </tr>
        <tr>
            <td><input type="password" name="confpassword" id="passwordd" value="<?php echo $confpassword ?>">
                <p class="bgcolor"><?php echo $confpassword_mess ; ?></p></td>
        </tr>
        <tr>
            <td ><input type="checkbox" onclick="togglePassword()" ><label> Check Mote de Passe </label></td>
            
        </tr>
        <tr>
        <td align="center">
        
        <a href="utilisateur.php"  style=" color:black; text-decoration: none; cursor: pointer;margin-top: 7%;padding:4%;border-radius: 10%;border: none;background-color: lightgray;width:max-content">< Retour</a>
        <input  type="submit" value="Ajouter" name="ajouter" id="submit" style="margin-left:8%;font-weight: bold;"></td>
      
        </tr>
     </table>  
    </form> 
    </div>
    

</body>
</html>