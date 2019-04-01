<?PHP
include "../config.php";
class LivraisonC {
function afficherLivraison ($livraison){
		echo "numcommande: ".$livraison->getNumcom()."<br>";
		echo "Nom: ".$livraison->getNomclient()."<br>";
		echo "Prénom: ".$livraison->getPrenomc()."<br>";
		echo "Numclient: ".$livraison->getNumclient()."<br>";
		echo "Numadresse: ".$livraison->getnumadress()."<br>";
		echo "Nomrue: ".$livraison->getNomrue()."<br>";
		echo "Nomville: ".$livraison->getNomville()."<br>";
		echo "nomgouv: ".$livraison->getNomgouv()."<br>";
		echo "Prixlivraison: ".$livraison->getPrixlivraison()."<br>";
		echo "Prixcomm: ".$livraison->getPrixcomm()."<br>";
		echo "Prixtotal: ".$livraison->getPrixtotal()."<br>";
		echo "Cinlivreur: ".$livraison->getCinlivreur()."<br>";
		echo "Datelivraison: ".$livraison->getDatelivraison()."<br>";
		
	}

	function ajouterLivraison($livraison){
		$sql="insert into livraison (numcom,nomclient,prenomc,numclient,numadress,nomrue,nomville,nomgouv,prixlivraison,prixcomm,prixtotal,cinlivreur,datelivraison) values (:numcom, :nomclient,:prenomc,:numclient,:numadress,:nomrue, :nomville,:nomgouv,:prixlivraison,:prixcomm,:prixtotal, :cinlivreur,:datelivraison)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $numcom=$livraison->getNumcom();
        $nomclient=$livraison->getNomclient();
        $prenomc=$livraison->getPrenomc();
        $numclient=$livraison->getNumclient();
        $numadress=$livraison->getnumadress();
        $nomrue=$livraison->getNomrue();
        $nomville=$livraison->getNomville();
        $nomgouv=$livraison->getNomgouv();
        $prixlivraison=$livraison->getPrixlivraison();
        $prixcomm=$livraison->getPrixcomm();
        $prixtotal=$livraison->getPrixtotal();
        $cinlivreur=$livraison->getCinlivreur();
        $datelivraison=$livraison->getDatelivraison();

		$req->bindValue(':numcom',$numcom);
		$req->bindValue(':nomclient',$nomclient);
		$req->bindValue(':prenomc',$prenomc);
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
	
	function afficherLivraisons(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
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

	function supprimerLivraison($numcom){
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
	function modifierlivraison($livraison,$id_liv){
		$sql="UPDATE livraison SET numcom=:numcom,nomclient=:nomclient,prenomc=:prenomc, numclient=:numclient,numadress=:numadress,nomrue=:nomrue,nomville=:nomville,nomgouv=:nomgouv,prixlivraison=:prixlivraison,prixcomm=:prixcomm,prixtotal=:prixtotal, cinlivreur=:cinlivreur, cinlivreur=:cinlivreur ,datelivraison=:datelivraison WHERE id_liv=:id_liv";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $numcom=$livraison->getNumcom();
        $nomclient=$livraison->getNomclient();
        $prenomc=$livraison->getPrenomc();
        $numclient=$livraison->getNumclient();
        $numadress=$livraison->getnumadress();
        $nomrue=$livraison->getNomrue();
        $nomville=$livraison->getNomville();
        $nomgouv=$livraison->getNomgouv();
        $prixlivraison=$livraison->getPrixlivraison();
        $prixcomm=$livraison->getPrixcomm();
        $prixtotal=$livraison->getPrixtotal();
        $cinlivreur=$livraison->getCinlivreur();
        $datelivraison=$livraison->getDatelivraison();

		$datas = array(':id_liv'=>$id_liv,':numcom'=>$numcom,':nomclient'=>$nomclient,':prenomc'=>$prenomc, ':numclient'=>$numclient,':numadress'=>$numadress,':nomrue'=>$nomrue,':nomville'=>$nomville,':nomgouv'=>$nomgouv,':prixlivraison'=>$prixlivraison,':prixcomm'=>$prixcomm, ':prixtotal'=>$prixtotal, ':cinlivreur'=>$cinlivreur, ':cinlivreur'=>$cinlivreur ,':datelivraison'=>$datelivraison);
		
		
		$req->bindValue(':id_liv',$id_liv);
		$req->bindValue(':numcom',$numcom);
		$req->bindValue(':nomclient',$nomclient);
		$req->bindValue(':prenomc',$prenomc);
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
	function recupererlivraison($id_liv){
		$sql="SELECT * from livraison where id_liv=$id_liv";
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