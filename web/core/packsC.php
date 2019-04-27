<?PHP
include "../config.php";
class PacksC {
function afficherPacks($packs){
		echo "Referencepa: ".$packs->getReferencepa()."<br>";
        echo "Nomp: ".$packs->getNomp()."<br>";
        echo "Caontenu: ".$packs->getContenu()."<br>";
        echo "Prixp: ".$packs->getPrixp()."<br>";
        echo "Pourcp: ".$packs->getPourcp()."<br>";
		
	}
	
	function ajouterPacks($packs){
		$sql="insert into packs (Referencepa,Nomp,Contenu,Prixp,Pourcp) values (:Referencepa,:Nomp,:Contenu,:Prixp,:Pourcp)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Referencepa=$packs->getReferencepa();
        $Nomp=$packs->getNomp();
        $Contenu=$packs->getContenu();
        $Prixp=$packs->getPrixp();
        $Pourcp=$packs->getPourcp();
        
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
	
	function afficherPackss(){
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
	
}

?>