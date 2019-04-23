<?PHP
class suggestionPC {
function afficherSuggestionP ($suggestionP){
		
		echo "idUtilisateur: ".$suggestionP->getidUtilisateur()."<br>";
		echo "date: ".$suggestionP->getDate()."<br>";
		echo "sujet: ".$suggestionP->getSujet()."<br>";
		echo "commentaire: ".$suggestionP->getCommentaire()."<br>";
	
	}
	
	function ajouterSuggestionP($suggestionP){
		$sql="insert into suggestionparticuliere (idUtilisateur,date,sujet,commentaire) values (:idUtilisateur,:date,:sujet,:commentaire)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
      
        $idUtilisateur=$suggestionP->getidUtilisateur();
        $date=date("Y-m-d h:i:sa");
        
        $sujet=$suggestionP->getSujet();
        $commentaire=$suggestionP->getCommentaire();
       

		
		$req->bindValue(':idUtilisateur',$idUtilisateur);
		$req->bindValue(':date',$date);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':commentaire',$commentaire);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherSuggestionPs(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From suggestionparticuliere";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    function afficherSuggestionPsClient($client){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From suggestionparticuliere where idUtilisateur='$client'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function supprimerSuggestionP($num){
		$sql="DELETE FROM suggestionparticuliere where num=:num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
      

	}
	function modifierSuggestionP($suggestionP,$num){
		$sql="UPDATE suggestionparticuliere SET num=:numm, idUtilisateur=:idUtilisateur,date=:date,sujet=:sujet,commentaire=:commentaire WHERE num=:num";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$numm=$suggestionP->getNum();
        $idUtilisateur=$suggestionP->getidUtilisateur();
        $date=$suggestionP->getDate();
        $sujet=$suggestionP->getSujet();
        $commentaire=$suggestionP->getCommentaire();
		$datas = array(':numm'=>$numm, ':num'=>$num, ':idUtilisateur'=>$idUtilisateur,':date'=>$date,':sujet'=>$sujet,':commentaire'=>$commentaire);
		$req->bindValue(':numm',$numm);
		$req->bindValue(':num',$num);
		$req->bindValue(':idUtilisateur',$idUtilisateur);
		$req->bindValue(':date',$date);
		$req->bindValue(':sujet',$sujet);
		
		$req->bindValue(':commentaire',$commentaire);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererSuggestionP($num){
		$sql="SELECT * from suggestionparticuliere where num=$num";
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