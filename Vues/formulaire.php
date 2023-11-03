<?php
include('../Controleurs/ajout.php');
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
    <p>Nom: <input type="text" name="nom" placeholder="Entrer le nom"></p>
    <p>Prenom: <input type="text" name="prenom" placeholder="Entrer le prenom"></p>
    <p>Telephone: <input type="tel" name="telephone" placeholder="Entrer le numero de telephone"></p>
    
    <label for="choice">Ce contact est-il favori?</label>
    <select id="choix" name="choix">
      <option value="oui">Oui</option>
      <option value="non">Non</option>
    </select>
    
    <button type="submit" name="Ajout"> Ajouter Contact </button>
  </form>
</body>
</html>
