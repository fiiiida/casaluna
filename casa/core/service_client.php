<?PHP

include "../entities/client.php";
class service_client {
function afficher ($client){
        echo "identifiant: ".$client->getId()."<br>";
        echo "Nom: ".$client->getNom()."<br>";
        echo "Prénom: ".$client->getPrenom()."<br>";
        echo "Age: ".$client->getAge()."<br>";
        echo "sexe: ".$client->getSexe()."<br>";
        echo "adresse: ".$client->getAdresse()."<br>";
        echo "email: ".$client->getEmail()."<br>";
        echo "mdp: ".$client->getMdp()."<br>";
        echo "fidelite: ".$client->getFidelite()."<br>";
    }
    
    function ajouter($client){
        $sql="INSERT INTO client (nom,prenom,age,sexe,mdp,email,fidelite,adresse) VALUES (:nom, :prenom,:age,:sexe,:mdp,:email,:fidelite,:adresse)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $age=$client->getAge();
        $sexe=$client->getSexe();
        $adresse=$client->getAdresse();
        $email=$client->getEmail();
        $mdp=$client->getMdp();
        $fidelite=$client->getFidelite();

 
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':age',$age);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':email',$email);
        $req->bindValue(':mdp',$mdp);
        $req->bindValue(':fidelite',$fidelite);
               
        
            $req->execute();
           header('Location: afficher.php');
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    function afficherClient(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From client";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function supprimer($identifiant){
        $sql="DELETE FROM client where identifiant= :identifiant";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':identifiant',$identifiant);
        try{
            $req->execute();
            header('Location: afficher.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   function modifier($client,$identifiant){
        $sql="UPDATE client SET  nom=:nom,prenom=:prenom,age=:age,sexe=:sexe,adresse=:adresse,email=:email,mdp=:mdp,fidelite=:fidelite WHERE identifiant=:identifiant";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $age=$client->getAge();
        $sexe=$client->getSexe();
        $adresse=$client->getAdresse();
        $email=$client->getEmail();
        $mdp=$client->getMdp();
        $fidelite=$client->getFidelite();
        $datas = array(':identifiant'=>$identifiant,':nom'=>$nom,':prenom'=>$prenom,':age'=>$age,':sexe'=>$sexe,':adresse'=>$adresse,':email'=>$email,':mdp'=>$mdp,':fidelite'=>$fidelite);
        $req->bindValue(':identifiant',$identifiant);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':age',$age);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':email',$email);
        $req->bindValue(':mdp',$mdp);
        $req->bindValue(':fidelite',$fidelite);
        
        
            $s=$req->execute();
            

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    function recuperer($identifiant){
        $sql="SELECT * from client where identifiant=$identifiant";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function rechercher($identifiant){
        $sql="SELECT * from client where identifiant=$identifiant";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}

?>