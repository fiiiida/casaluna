<?PHP
include "../config.php";
class statisfactionC {
function affichersatisfaction ($satisfaction){
		
		echo "cin_livreur: ".$satisfaction->getcin_livreur()."<br>";
		echo "NUM_com: ".$satisfaction->getnum_com()."<br>";
		echo "satisfaction: ".$satisfaction->getsatisfaction()."<br>";
		echo "score: ".$satisfaction->getscore()."<br>";
		
	}
	
	function ajoutersatisfaction($satisfaction){
		$sql="insert into satisfaction (cin_livreur,num_com,satisfaction,score) values ( :cin_livreur,:num_com,:satisfaction,:score)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
		
      
        $cin_livreur=$satisfaction->getcin_livreur();
        $num_com=$satisfaction->getnum_com();
        $satisfaction=$satisfaction->getsatisfaction();
        $score=$satisfaction->getscore();
        $num=$satisfaction->getnum();
       
		
		$req->bindValue(':cin_livreur',$cin_livreur);
		$req->bindValue(':num_com',$num_com);
		$req->bindValue(':satisfaction',$satisfaction);//bind value associe une valeur à un parametre
		$req->bindValue(':score',$score);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	/*function affichersatisfactions(){
		
		$sql="SElECT * From satisfaction";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimersatisfaction($satisfaction){
		$sql="DELETE FROM satisfaction where satisfaction= :satisfaction";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':satisfaction',$satisfaction);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiersatisfaction($satisfaction,$satisfaction){
		$sql="UPDATE satisfaction SET  satisfaction_livreur=:satisfaction_livreur,num_com=:num_com,satisfaction=:satisfactionn,score=:score,num=:num,numurg=:numurg,mail=:mail,secteur=:secteur,disponibilite=:disponibilite,satisfaction_livreurbrelivraison=:satisfaction_livreurbrelivraison, WHERE satisfaction=:satisfaction";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $satisfaction_livreur=$satisfaction->getsatisfaction_livreur();
        $num_com=$satisfaction->getnum_com();
        $satisfactionn=$satisfaction->getsatisfaction();
        $score=$satisfaction->getscore();
        $num=$satisfaction->getnum();
        $numurg=$satisfaction->getnumurg();
        $mail=$satisfaction->getmail();
        $secteur=$satisfaction->getsecteur();
        $disponibilite=$satisfaction->getdisponibilite();
        $satisfaction_livreurbrelivraison=$satisfaction->getsatisfaction_livreurbrelivraison();
		$datas = array( ':satisfaction_livreur'=>$satisfaction_livreur,':num_com'=>$num_com,':satisfaction'=>$satisfaction, ':satisfactionn'=>$satisfactionn, ':score'=>$score,':num'=>$num,':numurg'=>$numurg,':mail'=>$mail,':secteur'=>$secteur,':disponibilite'=>$disponibilite,':satisfaction_livreurbrelivraison'=>$satisfaction_livreurbrelivraison    );
		
		
		$req->bindValue(':satisfaction_livreur',$satisfaction_livreur);
		$req->bindValue(':num_com',$num_com);
		$req->bindValue(':satisfaction',$satisfaction);
		$req->bindValue(':satisfactionn',$satisfactionn);
		$req->bindValue(':score',$score);
		$req->bindValue(':num',$num);
		$req->bindValue(':numurg',$numurg);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':secteur',$secteur);
		$req->bindValue(':disponibilite',$disponibilite);
		$req->bindValue(':satisfaction_livreurbrelivraison',$satisfaction_livreurbrelivraison);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperersatisfaction($satisfaction){
		$sql="SELECT * from satisfaction where satisfaction=$satisfaction";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListesatisfaction($num_com){
		$sql="SELECT * from satisfaction where num_com=$num_com";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}*/

?>