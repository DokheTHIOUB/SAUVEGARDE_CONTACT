<?php
include('../Modeles/connexion.php');

class utilisateur{
    public $nom;
    public $prenom;
    public $telephone;
    public $choix;

        public function __construct($nom, $prenom, $telephone, $choix){
                $this->setNom($nom);
                $this->setPrenom($prenom);
                $this->telephone=$telephone;
                $this->setchoix ($choix) ;
        }

        public function Ajout(){
            global $con;
            $sql = "INSERT INTO utilisateur(nom,prenom,telephone,choix) VALUES ('$this->nom','$this->prenom','$this->telephone','$this->choix')";
            $stmt = $con->prepare($sql); 
            $stmt->execute() ;  
        }

        public static function GetContact($id){
            global $con;
            $connect = "SELECT * FROM utilisateur WHERE id=$id";
            $stmt=$con->prepare($connect);
            if ($stmt->execute()) {
              return $stmt->fetch();
            }
        }
        public function ModifierContact($id){
            global $con;
              $sql="UPDATE utilisateur SET nom='$this->nom',prenom='$this->prenom',telephone='$this->telephone',choix='$this->choix' WHERE id=$id";
              $stmt=$con->prepare($sql); 
              $stmt->execute();
        }
        public static function Supp($id){
            global $con;
              $sql="DELETE FROM utilisateur WHERE id=$id";
              $stmt=$con->prepare($sql); 
              $stmt->execute();
        }
        // public static function ListerContact(){
        //     global $con;
        //     $requete = "SELECT * FROM utilisateur ORDER BY nom";
        //     $stmt = $con->prepare($connect);
        //     if ($stmt->execute()) {
        //         return $stmt->fetchAll();
        //     }
        // }
          
        public static function ListerContact(){
            global $con;
            $connect = "SELECT * FROM utilisateur";
            $stmt=$con->prepare($connect);
            if ($stmt->execute()) {
              return $stmt->fetchAll();
            }
        }
         
        public function getnom(){
            return $this->nom;
        }
        public function setNom($nom){
            $pattern='/^[a-zA-Zä-ÿÄ-Ÿ\s]*$/';
            if(preg_match($pattern,$nom)==1 && strlen($nom)<=25){
                return $this->nom=$nom; 
            } else {
                die("nnnnnnnnnnn");
            }
           
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function setPrenom($prenom){
            $pattern='/^[a-zA-Zä-ÿÄ-Ÿ\s]*$/';
            if(preg_match($pattern,$prenom)==1 && strlen($prenom)<=25){
                return $this->prenom=$prenom;
            }else{
                throw new Exception("le prenom est invalid ou le prenom est superieur est 25 caractère");
            }
        }      
        
        public function setchoix( $choix){
            if ($choix != "oui" && $choix != "non") {
                die(" Vous avez le choix entre oui ou non"); 
            }
        }  
 }


?>