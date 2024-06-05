<?php 


$nom_mess=$prenom_mess=$email_mess=$password_mess=$confpassword_mess=$nom=$prenom=$email=$password=$confpassword=$result_mess='';
 
try {

    if ($_SERVER['REQUEST_METHOD'] == 'POST' &&  isset($_POST['ajouter'])) {

        if (isset($_POST['nom']) && isset($_POST['prenom'])
            && isset($_POST['email'])&& isset($_POST['password'])) {

                include ('conx.php');
            
                $nom=htmlspecialchars($_POST['nom']);
                $prenom=htmlspecialchars($_POST['prenom']);
                $email=htmlspecialchars($_POST['email']);
                $password=htmlspecialchars($_POST['password']);
                $confpassword=htmlspecialchars($_POST['confpassword']);

            if (empty(trim($nom))) {
                $nom_mess = "Remplair votre nom  ";
            }
            elseif(empty(trim($prenom))) {
                
                $prenom_mess="Remplair votre Prenom  ";
            } 
            elseif (empty(trim($email))) {
                $email_mess= "  Remplair Votre Email  ";

            }
            
            elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                    $email_mess= "Ecrir un corect email <br>'exempel@gmail.com'";
            }
            elseif(empty(trim($password))){
                $password_mess= "Remplair Votre Mot de Passe";
            }
            elseif(empty(trim($confpassword))){
                $confpassword_mess= "Confirmer Votre Mot de Passe";
            }

            elseif ($password != $confpassword) {
                
                $confpassword_mess=' confirmation de mot de passe'.'<br>'. 'incorrect';
                

            }

            else{

           

        
                $sql= "INSERT INTO client(nom,prenom,email,password)
                       value ('$nom','$prenom','$email','$password')";
                $result=mysqli_query($conn,$sql);


                        if ($result) {
                         $result_mess="Cette utilisateur et ajouter.";
                      }
                      else{
                        $result_mess="Cette utilisateur pas ajouter.";
                      }

                }
        }
                                        
            
 
        
        }
             

} catch (Exception $e) {
    echo 'Error :  '.$e->getMessage();
  }  




