<?PHP
include "../config.php";
class LivraisonL {
function afficherlivraison ($livraison){
		
		echo "Numero de commande: ".$livraison->getnumcom()."<br>";
		echo "nom client: ".$livraison->getnomclient()."<br>";
		echo "prenom client : ".$livraison->getprenomc()."<br>";
		echo "numero client: ".$livraison->getnumclient()."<br>";
		echo "numero adresse: ".$livraison->getnumadress()."<br>";
		echo "nom de la rue: ".$livraison->getnomrue()."<br>";
		echo "nom de la ville: ".$livraison->getnomville()."<br>";
		echo "nom gouvernorat: ".$livraison->getnomgouv()."<br>";
		echo "prix livraison: ".$livraison->getprixlivraison()."<br>";
		echo "prix commande: ".$livraison->getprixcomm()."<br>";
		echo "prix total: ".$livraison->getprixtotal()."<br>";
		echo "Cin du livreur: ".$livraison->getcinlivreur()."<br>";
		echo "date de livraison : ".$livreur->getdatelivraison()."<br>";
		
	}
	
	function ajouterlivraison($livraison){
		$sql="insert into livraison (numcom,nomclient,prenomc,numclient,numadress,nomrue,nomville,nomgouv,prixlivraison,prixcomm,prixtotal,cinlivreur,datelivraison) values ( :numcom,:nomclient,:prenomc,:numclient,:numadress,:nomrue,:nomville,:nomgouv,:prixlivraison,:prixcomm,:prixtotal,:cinlivreur,:datelivraison)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
		
      
        $numcom=$livraison->getnumcom();
        $nomclient=$livraison->getnomclient();
        $prenomc=$livraison->getprenomc();
        $numclient=$livraison->getnumclient();
        $numadress=$livraison->getnumadress();
        $nomrue=$livraison->getnomrue();
        $nomville=$livraison->getnomville();
        $nomgouv=$livraison->getnomgouv();
        $prixlivraison=$livraison->getprixlivraison();
        $prixcomm=$livraison->getprixcomm();
        $prixtotal=$livraison->getprixtotal();
        $cinlivreur=$livraison->getcinlivreur();
        $datelivraison=$livraison->getdatelivraison();
		
		$req->bindValue(':numcom',$numcom);
		$req->bindValue(':nomclient',$nomclient);
		$req->bindValue(':prenomc',$prenomc);//bind value associe une valeur à un parametre
		$req->bindValue(':numclient',$numclient);
		$req->bindValue(':numadress',$numadress);
		$req->bindValue(':nomrue',$nomrue);
		$req->bindValue(':nomville',$nomville);
		$req->bindValue(':nomgouv',$nomgouv);
		$req->bindValue(':prixlivraison',$prixlivraison);
		$req->bindValue(':prixcomm',$prixcomm);
		$req->bindValue(':prixtotal',$prixtotal);
		$req->bindValue(':cinlivreur',$cinlivreur);
		$req->bindValue(':datelivraison',$datelivraison);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivraisons(){
		
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivraison($numcom){
		$sql="DELETE FROM livraison where numcom= :numcom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numcom',$numcom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($livraison,$numcom){
		$sql="UPDATE livraison SET  numcom=:numcom,nomclient=:nomclient,prenomc=:prenomc,numclient=:numclient,numadress=:numadress,nomrue=:nomrue,nomville=:nomville,nomgouv=:nomgouv,prixlivraison=:prixlivraison,prixcomm=:prixcomm,prixtotal=:prixlivraison, WHERE numcom=:numcom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
       
        $numcom=$livraison->getnumcom();
        $nomclient=$livraison->getnomclient();
        $prenomc=$livraison->getprenomc();
        $numclient=$livraison->getnumclient();
        $numadress=$livraison->getnumadress();
        $nomrue=$livraison->getnomrue();
        $nomville=$livraison->getnomville();
        $nomgouv=$livraison->getnomgouv();
        $prixlivraison=$livraison->getprixlivraison();
        $prixcomm=$livraison->getprixcomm();
        $prixtotal=$livraison->getprixtotal();
        $cinlivreur=$livraison->getcinlivreur();
        $datelivraison=$livraison->getdatelivraison();
		$datas = array( ':numcom'=>$numcom,':nomclient'=>$nomclient,':prenomc'=>$prenomc, ':numclient'=>$numclient,':numadress'=>$numadress,':nomrue'=>$nomrue,':nomville'=>$nomville,':nomgouv'=>$nomgouv,':prixlivraison'=>$prixlivraison,':prixcomm'=>$prixcomm,':prixtotal'=>$prixtotal,    );
		
		
			$req->bindValue(':numcom',$numcom);
		$req->bindValue(':nomclient',$nomclient);
		$req->bindValue(':prenomc',$prenomc);//bind value associe une valeur à un parametre
		$req->bindValue(':numclient',$numclient);
		$req->bindValue(':numadress',$numadress);
		$req->bindValue(':nomrue',$nomrue);
		$req->bindValue(':nomville',$nomville);
		$req->bindValue(':nomgouv',$nomgouv);
		$req->bindValue(':prixlivraison',$prixlivraison);
		$req->bindValue(':prixcomm',$prixcomm);
		$req->bindValue(':prixtotal',$prixtotal);
		$req->bindValue(':cinlivreur',$cinlivreur);
		$req->bindValue(':datelivraison',$datelivraison);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivraison($numcom){
		$sql="SELECT * from livraison where numcom=$numcom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivraison($numcom){
		$sql="SELECT * from livraison where numcom=$numcom";
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