<?php
include('../Controleurs/modif.php');
//include('../Modeles/Utilisateurs.php');

$modif=utilisateur::GetContact($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
  <form class="form" method="POST">
    <h2>CONTACT</h2>
    <p>Nom: <input type="text" name="nom" value="<?php echo $modif['nom'] ?>"></p>
    <p>Prenom: <input type="text" name="prenom" value="<?php echo $modif['prenom'] ?>"></p>
    <p>Telephone: <input type="tel" name="telephone" value="<?php echo $modif['telephone'] ?>"></p>
    
    <label for="choice">Ce contact est-il favori?</label>
    <select id="choix" name="choix">
      <option value="oui" <?php if($modif['choix']=='oui') echo "selected" ?> >Oui</option>
      <option value="non" <?php if($modif['choix']=='non') echo "selected"?> >Non</option>
    </select>
    
    <button type="submit" name="modif"> Modifier Contact </button>
  </form>
</body>
</html>
