<?php
include('../Modeles/Utilisateurs.php');


    if (isset($_POST['supprimer'])) {
        $id=$_POST['idContact'];
        utilisateur::Supp($id);
        echo "Suppression Contact reussi";
        header('location:../Vues/listecontact.php');
    }  
    
?>
