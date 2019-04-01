<?PHP
include "../config.php";
class EventC {
function afficherEvent($event){
		echo "nome: ".$event->getnome()."<br>";
        echo "lieu: ".$event->getlieu()."<br>";
        echo "dateexpo: ".$event->getdateexpo()."<br>";
		
	}
	
	function ajouterEvent($event){
		$sql="insert into event (nome,lieu,dateexpo) values (:nome,:lieu,:dateexpo)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nome=$event->getnome();
        $lieu=$event->getlieu();
        $dateexpo=$event->getdateexpo();

        
		$req->bindValue(':nome',$nome);
        $req->bindValue(':lieu',$lieu);
        $req->bindValue(':dateexpo',$dateexpo);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEvents(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerEvents($id_event){
		$sql="DELETE FROM event where id_event= :id_event";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_event',$id_event);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


		function modifierEvent($event,$id_event){
		$sql="UPDATE event SET nome=:nome, lieu=:lieu,dateexpo=:dateexpo WHERE id_event=:id_event";

		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$nome=$event->getnome();
        $lieu=$event->getlieu();
        $dateexpo=$event->getdateexpo();


        $datas = array(':id_event'=>$id_event,':nome'=>$nome,':lieu'=>$lieu,':dateexpo'=>$dateexpo);
        
		
        $req->bindValue(':nome',$nome);
        $req->bindValue(':lieu',$lieu);
        $req->bindValue(':dateexpo',$dateexpo);
        $req->bindValue(':id_event',$id_event);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);

        }
		
	}


        function recupererEvent($id_event){
        $sql="SELECT * from event where id_event=$id_event";
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