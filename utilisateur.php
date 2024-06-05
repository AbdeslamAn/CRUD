<?php
include 'php/lire_utilisateur.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | CLIENT</title>

	<link rel="stylesheet" type="text/css" href="css/crud_style.css">
	

	<script>
    function confirmDelete(userId, firstName, lastName) {
        if (confirm("Etes-vous sûr de vouloir supprimer l'utilisateur :" + firstName + " " + lastName + "?")) {
            window.location.href = "php/delete.php?id_client=" + userId;
        }
    }
</script>
</head>
<body>
    <div class="link_container">
        <a class="link" href="ajouter_utilisateur.php">Ajouter un utilisateur</a>

        
    </div>
    <center>
        <!-- get le meessage d'erreur qui il ya sur Url et afficher ici -->
		<?php if (isset($_GET['ms'])): ?>
            <p><u><?php echo $_GET['ms']; ?></u></p>
            <?php endif ?>
		</center>
        <br>
    <table>
        <thead>
            <tr>
                
                <td><b>#</b></td>
                <td><b>Nom</b></td>
                <td><b>Prenom</b></td>
                <td><b>Email</b></td>
                <td><b>Password</b></td>
                <td><b>Edit | Supremer</b></td>
            </tr>
        </thead>
        <tbody>
        <?php
            $i= 0;
            while ($users = mysqli_fetch_assoc($result)) {
            $i++;
        ?>
            <tr>
                <td><b><?=$i?></b></td>
                <td><b><?=$users['nom']?></b></td>
                <td><b><?=$users['prenom']?></b></td>
                <td><b><?=$users['email']?></b></td>
                <td><b><?=$users['password']?></b></td>
                <td class="actions">
                    <a href="edit_info.php?id_client=<?=$users['id_client']?>" class="image" ><img src="images/write.png" alt=""></a>            
					<a href="javascript:void(0);" onclick="confirmDelete(<?=$users['id_client']?>, '<?=$users['nom']?>', '<?=$users['prenom']?>');" class="image"><img src="images/remove.png" alt=""></a>
                </td>	
            </tr>

        <?php } ?>
        </tbody>
       
    </table>


</body>
</html>