<?php

// class Connection{
//     // PUBLIC $serveur = "localhost";
//     // PUBLIC $utilisateur = "root";
//     // PUBLIC $mot_de_passe = "thioub";
//     // PUBLIC $base_de_donnees = "GESTION_CONTACT";

//     PUBLIC function Database(){
//         try {
//             $con = new PDO("mysql:host=localhost;dbname=GESTION_CONTACT", 'root', 'thioub');
//             $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             return $con;
          
//         } catch (PDOException $e) {
//             echo "La connexion a échoué : " . $e->getMessage();
//         }
//     }   
// }


// $connect = new Connection() ;
// $con = $connect->Database();

try {
    $con = new PDO("mysql:host=localhost;dbname=GESTION_CONTACT", 'root', 'thioub');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
  
} catch (PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}
// $contact1=new utilisateur($nom, $prenom, $telephone, $choix);
// $contact1->Ajout();

