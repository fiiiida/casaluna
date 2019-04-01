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
    





		function modifierPacks($pack,$id_pack){
		$sql="UPDATE packs SET Referencepa=:Referencepa, Nomp=:Nomp,Contenu=:Contenu,Prixp=:Prixp,Pourcp=:Pourcp WHERE id_pack=:id_pack";

		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$Referencepa=$pack->getReferencepa();
        $Nomp=$pack->getNomp();
        $Contenu=$pack->getContenu();
        $Prixp=$pack->getPrixp();
        $Pourcp=$pack->getPourcp();

        $datas = array(':id_pack'=>$id_pack, ':Referencepa'=>$Referencepa, ':Nomp'=>$Nomp,':Contenu'=>$Contenu,':Prixp'=>$Prixp,':Pourcp'=>$Pourcp);
        
		$req->bindValue(':id_pack',$id_pack);
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




        function recupererPacks($id_pack){
        $sql="SELECT * from packs where id_pack=$id_pack";
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