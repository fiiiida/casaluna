<?PHP
class suggestionC {
function afficherSuggestion ($suggestion){
		echo "numSuggestion: ".$suggestion->getnumSuggestion()."<br>";
		echo "idUtilisateur: ".$suggestion->getidUtilisateur()."<br>";
		echo "date: ".$suggestion->getDate()."<br>";
		echo "localisation: ".$suggestion->getLocalisation()."<br>";
		echo "Service: ".$suggestion->getService()."<br>";
		echo "noteService:".$suggestion->getNoteService()."<br>";
		echo "serviceGlobal:".$suggestion->getServiceGlobal()."<br>";
	}
	
	function ajouterSuggestion($suggestion){
		$sql="insert into suggestions (numSuggestion,idUtilisateur,date,localisation,Service,noteService,serviceGlobal) values (:numSuggestion,:idUtilisateur,:date,:localisation,:Service,:noteService,:serviceGlobal)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $numSuggestion=$suggestion->getnumSuggestion();
        $idUtilisateur=$suggestion->getidUtilisateur();
        $date=date("Y-m-d h:i:sa");
        $localisation=$suggestion->getLocalisation();
        $Service=$suggestion->getService();
        $noteService=$suggestion->getNoteService();
        $serviceGlobal=$suggestion->getServiceGlobal();

		$req->bindValue(':numSuggestion',$numSuggestion);
		$req->bindValue(':idUtilisateur',$idUtilisateur);
		$req->bindValue(':date',$date);
		$req->bindValue(':localisation',$localisation);
		$req->bindValue(':Service',$Service);
		$req->bindValue(':noteService',$noteService);
		$req->bindValue(':serviceGlobal',$serviceGlobal);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherSuggestions(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From suggestions";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    function afficherSuggestionsClient($client){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From suggestions where idUtilisateur='$client'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerSuggestion($numSuggestion){
		$sql="DELETE FROM suggestions where numSuggestion= :numSuggestion";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numSuggestion',$numSuggestion);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
      

	}
	 function modifierSuggestion($suggestion,$numSuggestion){
		$sql="UPDATE suggestions SET  idUtilisateur=:idUtilisateur,date=:date,localisation=:localisation,Service=:Service,noteService=:noteService,serviceGlobal=:serviceGlobal WHERE numSuggestion=:numSuggestion";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $idUtilisateur=$suggestion->getidUtilisateur();
        $date=date("Y-m-d h:i:sa");
        $localisation=$suggestion->getLocalisation();
        $Service=$suggestion->getService();
         $noteService=$suggestion->getNoteService();
           $serviceGlobal=$suggestion->getServiceGlobal();
         

		$datas = array(':numSuggestion'=>$numSuggestion, ':idUtilisateur'=>$idUtilisateur,':date'=>$date,':localisation'=>$localisation,':Service'=>$Service, ':noteService'=>$noteService,':serviceGlobal'=>$serviceGlobal);
		$req->bindValue(':numSuggestion',$numSuggestion);
		$req->bindValue(':idUtilisateur',$idUtilisateur);
			$req->bindValue(':date',$date);
		$req->bindValue(':localisation',$localisation);
		$req->bindValue(':Service',$Service);
		
		$req->bindValue(':noteService',$noteService);
		$req->bindValue(':serviceGlobal',$serviceGlobal);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererSuggestion($numSuggestion){
		$sql="SELECT * from suggestions where numSuggestion=$numSuggestion";
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