<?php
include('../Modeles/Utilisateurs.php');


    if (isset($_POST['Ajout'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $choix = htmlspecialchars($_POST['choix']);
        
        $Ajout = new utilisateur($nom, $prenom, $telephone, $choix);
        $Ajout->Ajout();
        echo "Ajout Contact reussi";
        header('location:../Vues/listecontact.php');
    }

?>