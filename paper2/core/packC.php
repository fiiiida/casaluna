<?PHP
include "../config.php";
class PackC {
function afficherPack($pack){
		echo "Referencepa: ".$pack->getReferencepa()."<br>";
        echo "Nomp: ".$pack->getNomp()."<br>";
        echo "Contenu: ".$pack->getContenu()."<br>";
        echo "Prixp: ".$pack->getPrixp()."<br>";
        echo "Pourcp: ".$pack->getPourcp()."<br>";
		
	}
	
	function ajouterPack($pack){
		$sql="insert into packs (Referencepa,Nomp,Contenu,Prixp,Pourcp) values (:Referencepa,:Nomp,:Contenu,:Prixp,:Pourcp)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Referencepa=$pack->getReferencepa();
        $Nomp=$pack->getNomp();
        $Contenu=$pack->getContenu();
        $Prixp=$pack->getPrixp();
        $Pourcp=$pack->getPourcp();
        
		$req->bindValue(':Referencepa',$Referencepa);
        $req->bindValue(':Nomp',$Nomp);
        $req->bindValue(':Contenu',$Contenu);
        $req->bindValue(':Prixp',$Prixp);
        $req->bindValue(':Pourcp',$Pourcp);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPacks(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From packs";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerPacks($Referencepa){
		$sql="DELETE FROM packs where Referencepa= :Referencepa";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Referencepa',$Referencepa);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


		function modifierpack($pack,$Referencepa){
		$sql="UPDATE packs SET Referencepa=:Referencepap, Nomp=:Nomp,Contenu=:Contenu,Prixp=:Prixp,Pourcp=:Pourcp WHERE Referencepa=:Referencepa";

		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$Referencepap=$pack->getReferencepa();
        $Nomp=$pack->getNomp();
        $Contenu=$pack->getContenu();
        $Prixp=$pack->getPrixp();
        $Pourcp=$pack->getPourcp();

        $datas = array(':Referencepap'=>$Referencepap, ':Referencepa'=>$Referencepa, ':Nomp'=>$Nomp,':Contenu'=>$Contenu,':Prixp'=>$Prixp,':Pourcp'=>$Pourcp);
        
		$req->bindValue(':Referencepap',$Referencepap);
        $req->bindValue(':Referencepa',$Referencepa);
        $req->bindValue(':Nomp',$Nomp);
        $req->bindValue(':Contenu',$Contenu);
        $req->bindValue(':Prixp',$Prixp);
        $req->bindValue(':Pourcp',$Pourcp);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}




        function recupererpack($Referencepa){
        $sql="SELECT * from packs where Referencepa=$Referencepa";
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