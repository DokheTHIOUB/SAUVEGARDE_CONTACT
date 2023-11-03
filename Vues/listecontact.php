<?php
    include('../Modeles/connexion.php');
    //include('../Modeles/Utilisateurs.php');
    include('../Controleurs/supp.php');
    $contacts=Utilisateur::ListerContact();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title> lISTE DES CONTACTS</title>
</head>
<body>
<table>
  <tr>
    <th> Id </th> 
    <th> Nom </th> 
    <th> Prenom </th>
    <th> Telephone </th>
    <th> Favori </th>
    <th> Action </th>
  </tr>       
  
    <?php foreach($contacts as $c) {?>
        <tr>
         <td><?php echo $c['id'] ?></td>
         <td><?php echo $c['nom'] ?></td>
         <td><?php echo $c['prenom'] ?></td>
         <td><?php echo $c['telephone'] ?></td>
         <td><?php echo $c['choix'] ?></td>
         <td>
            <form action="" method="post">
                <a href="../Vues/ModifContact.php?id=<?php echo $c['id'] ?>">Modifier</a>
                <input type="hidden" name="idContact" value="<?php echo $c['id'] ?>">
                <button type="submit" name="supprimer">Supprimer</button>
            </form>
         </td>
       </tr>
    <?php } ?>
</table>
</body>
</html>