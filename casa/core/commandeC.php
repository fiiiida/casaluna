<?PHP
include "C:/wamp/www/casa/config.php";
class commandeC {

    

	function affichercommande($commande){
        echo "client_id: ".$commande->getclient_id()."<br>";
        echo "total_price: ".$commande->gettotal_price()."<br>";
        echo "created: ".$commande->getcreated()."<br>";
        echo "modified: ".$commande->getmodified()."<br>";
        echo "status: ".$commande->getstatus()."<br>";
        
    }
    
    function ajoutercommande($commande){
        $sql="insert into orders (client_id,total_price,created,modified,status) values (:client_id,:total_price,:created,:modified,:status)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $client_id=$commande->getclient_id();
        $total_price=$commande->gettotal_price();
        $created=$commande->getcreated();
        $modified=$commande->getmodified();
        $status=$commande->getstatus();
        
        $req->bindValue(':client_id',$client_id);
        $req->bindValue(':total_price',$total_price);
        $req->bindValue(':created',$created);
        $req->bindValue(':modified',$modified);
        $req->bindValue(':status',$status);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    function affichercommandes(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From orders";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
/*function affichercommandesFront(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT commandes.total_price,produit.image,produit.lib_prod From commandes,produit,categories where produit.idp=commandes.client_id and commandes.created=categories.id_cat";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }*/
    function supprimercommandes($id){
        $sql="DELETE FROM orders where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


        function modifiercommande($commande,$id){
        $sql="UPDATE orders SET status=:status WHERE id=:id";

        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        
        $status=$commande->getstatus();

        $datas = array(':id'=>$id,':status'=>$status);
        
        $req->bindValue(':id',$id);
      ;
        $req->bindValue(':status',$status);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }


function lastid($client_id,$total_price)
    {
        $pdo=Config::getConnexion();
      
        $sql='SELECT id FROM `orders` WHERE (client_id=:client_id AND total_price=:total_price)';
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(':client_id',$client_id);
        $stmt->bindParam(':total_price',$total_price);
        $stmt->execute();
        $idc=$stmt->fetch();
        //var_dump($idc);
        return $idc['id'];
    }

        function recuperercommande($id){
        $sql="SELECT * from orders where id=$id";
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