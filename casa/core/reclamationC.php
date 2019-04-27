<?PHP

class reclamationC {
function afficherReclamation ($reclamation){
		echo "idUtilisateurr: ".$reclamation->getidUtilisateur()."<br>";
		echo "sujetReclamation: ".$reclamation-> getSujetReclamation()."<br>";
		echo "commentaireReclamation: ".$reclamation->getCommentaireReclamation()."<br>";
		echo "date: ".$reclamation->getDate()."<br>";
	
	}
	
	function ajouterReclamation($reclamation){
		$sql="Insert INTO `reclamation`(`idUtilisateurr`, `sujetReclamation`, `commentaireReclamation`, `date`) VALUES (:idUtilisateurr,:sujetReclamation,:commentaireReclamation,:dates)";

		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idUtilisateurr=$reclamation->getidUtilisateur();
        $sujetReclamation=$reclamation->getSujetReclamation();
        $commentaireReclamation=$reclamation->getCommentaireReclamation();
        $date=date("Y-m-d h:i:sa");
        
		$req->bindValue(':idUtilisateurr',$idUtilisateurr);
		$req->bindValue(':sujetReclamation',$sujetReclamation);
		$req->bindValue(':commentaireReclamation',$commentaireReclamation);
		$req->bindValue(':dates',$date);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclmations(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    function afficherReclmationsClient($client){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation where idUtilisateurr='$client'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($numReclamation){
		$sql="DELETE FROM reclamation where numReclamation= :numReclamation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numReclamation',$numReclamation);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
      

	}
		function trierReclamation(){
$sql="SELECT * from reclamation ORDER BY date ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	  function modifierReclamation($reclamation,$numReclamation){
		$sql="UPDATE reclamation SET  idUtilisateurr=:idUtilisateurr,sujetReclamation=:sujetReclamation,commentaireReclamation=:commentaireReclamation,date=:date WHERE numReclamation=:numReclamation";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $idUtilisateurr=$reclamation->getidUtilisateur();
        $sujetReclamation=$reclamation->getSujetReclamation();
        $commentaireReclamation=$reclamation->getCommentaireReclamation();
         $date=date("Y-m-d h:i:sa");
		$datas = array(':numReclamation'=>$numReclamation, ':idUtilisateurr'=>$idUtilisateurr,':sujetReclamation'=>$sujetReclamation,':commentaireReclamation'=>$commentaireReclamation,':date'=>$date);
		$req->bindValue(':numReclamation',$numReclamation);
		$req->bindValue(':idUtilisateurr',$idUtilisateurr);
		$req->bindValue(':sujetReclamation',$sujetReclamation);
		$req->bindValue(':commentaireReclamation',$commentaireReclamation);
		$req->bindValue(':date',$date);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererReclamation($numReclamation){
		$sql="SELECT * from reclamation where numReclamation=$numReclamation";
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