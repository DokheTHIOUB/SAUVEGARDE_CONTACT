<?php
include('../Modeles/Utilisateurs.php');


    if (isset($_POST['modif'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $choix = htmlspecialchars($_POST['choix']);
        
        $Modif = new utilisateur($nom, $prenom, $telephone, $choix);
        $Modif->ModifierContact($_GET['id']);
        echo "Modification Contact reussi";
        header('location:../Vues/listecontact.php');
    }

    

    
?>