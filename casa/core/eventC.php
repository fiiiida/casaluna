<?PHP

class EventC {
function afficherEvent($event){
		echo "nome: ".$event->getnome()."<br>";
        echo "lieu: ".$event->getlieu()."<br>";
        echo "dateexpo: ".$event->getdateexpo()."<br>";
		
	}
	
	function ajouterEvent($event){
		$sql="insert into event (nome,lieu,img_event,dateexpo) values (:nome,:lieu,:img_event,:dateexpo)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nome=$event->getnome();
        $lieu=$event->getlieu();
        $img_event=$event->getimg_event();
        $dateexpo=$event->getdateexpo();

        
		$req->bindValue(':nome',$nome);
        $req->bindValue(':lieu',$lieu);
        $req->bindValue(':dateexpo',$dateexpo);
        $req->bindValue(':img_event',$img_event);
		
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
    function afficherStatut($client){
     
        $sql="SElECT participant.idevent,event.nome,event.dateexpo From event,participant where participant.idpar='$client' and participant.idevent=event.id_event ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

            function supprimerEventsStatut($idevent,$id_client){
        $sql="DELETE FROM participant where idevent= :idevent and idpar=:id_client" ;
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idevent',$idevent);
         $req->bindValue(':id_client',$id_client);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

        function trierEvents(){
        $sql="SELECT * from event ORDER BY nome ASC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

	function supprimerEvents($nome){
		$sql="DELETE FROM event where nome= :nome";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nome',$nome);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



		function modifierEvent($event,$id_event){
		$sql="UPDATE event SET nome=:nome, lieu=:lieu,img_event=:img_event,dateexpo=:dateexpo WHERE id_event=:id_event";

		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$nome=$event->getnome();
        $lieu=$event->getlieu();
        $img_event=$event->getimg_event();        
        $dateexpo=$event->getdateexpo();


        $datas = array(':id_event'=>$id_event,':nome'=>$nome,':lieu'=>$lieu,':img_event'=>$img_event,':dateexpo'=>$dateexpo);
        
		
        $req->bindValue(':nome',$nome);
        $req->bindValue(':lieu',$lieu);
        $req->bindValue(':img_event',$img_event);        
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

    function ajouterParticipants($id_event,$id_client){
        $sql="insert into participant (idpar,idevent) values (:idpar,:idevent)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
       

        
        $req->bindValue(':idpar',$id_client);
        $req->bindValue(':idevent',$id_event);
       
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
	
}

?>