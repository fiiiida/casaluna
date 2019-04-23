<?PHP

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
		$sql="insert into livraison (numcom,numclient,numadress,nomrue,nomville,nomgouv,prixlivraison,prixcomm,prixtotal,cinlivreur,datelivraison) values (:numcom,:numclient,:numadress,:nomrue, :nomville,:nomgouv,:prixlivraison,:prixcomm,:prixtotal, :cinlivreur,:datelivraison)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $numcom=$livraison->getNumcom();
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
		$sql="SElECT livraison.id_liv,livraison.numcom,client.ID,client.nom,client.prenom,livraison.numadress,livraison.nomrue,livraison.nomville,livraison.nomgouv,livraison.prixlivraison,livraison.prixcomm,livraison.prixtotal,livreur.nom as nomlivreur,livreur.prenom,livraison.datelivraison From livraison,client,livreur where client.ID=livraison.numclient and livraison.cinlivreur=livreur.idl ";
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
		$sql="UPDATE livraison SET numcom=:numcom, numclient=:numclient,numadress=:numadress,nomrue=:nomrue,nomville=:nomville,nomgouv=:nomgouv,prixlivraison=:prixlivraison,prixcomm=:prixcomm,prixtotal=:prixtotal, cinlivreur=:cinlivreur, cinlivreur=:cinlivreur ,datelivraison=:datelivraison WHERE id_liv=:id_liv";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $numcom=$livraison->getNumcom();
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

		$datas = array(':id_liv'=>$id_liv,':numcom'=>$numcom, ':numclient'=>$numclient,':numadress'=>$numadress,':nomrue'=>$nomrue,':nomville'=>$nomville,':nomgouv'=>$nomgouv,':prixlivraison'=>$prixlivraison,':prixcomm'=>$prixcomm, ':prixtotal'=>$prixtotal, ':cinlivreur'=>$cinlivreur, ':cinlivreur'=>$cinlivreur ,':datelivraison'=>$datelivraison);
		
		
		$req->bindValue(':id_liv',$id_liv);
		$req->bindValue(':numcom',$numcom);
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
		function afficherClient(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * from client ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherLivreur(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * from livreur ";
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