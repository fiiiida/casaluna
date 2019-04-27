<?PHP

class LivreurL {
function afficherlivreur ($livreur){
		
		echo "Nom: ".$livreur->getNom()."<br>";
		echo "Prénom: ".$livreur->getPrenom()."<br>";
		echo "Cin: ".$livreur->getCin()."<br>";
		echo "numero de telephone : ".$livreur->getnum()."<br>";
		echo "mail: ".$livreur->getmail()."<br>";
		echo "nombre de livraison effectuées : ".$livreur->getnombrelivraison()."<br>";
	}
	
	function ajouterlivreur($livreur){
		$sql="insert into livreur (nom,prenom,cin,numass,num,numurg,mail,secteur,disponibilite,nombrelivraison) values ( :nom,:prenom,:cin,:numass,:num,:numurg,:mail,:secteur,:disponibilite,:nombrelivraison)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
		
      
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $cin=$livreur->getCin();
        $numass=$livreur->getnumass();
        $num=$livreur->getnum();
        $numurg=$livreur->getnumurg();
        $mail=$livreur->getmail();
        $secteur=$livreur->getsecteur();
        $disponibilite=$livreur->getdisponibilite();
        $nombrelivraison=$livreur->getnombrelivraison();
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':cin',$cin);//bind value associe une valeur à un parametre
		$req->bindValue(':numass',$numass);
		$req->bindValue(':num',$num);
		$req->bindValue(':numurg',$numurg);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':secteur',$secteur);
		$req->bindValue(':disponibilite',$disponibilite);
		$req->bindValue(':nombrelivraison',$nombrelivraison);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivreurs(){
		
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimerlivreur($cin){
		$sql="DELETE FROM livreur where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivreur($livreur,$idl){
		$sql="UPDATE livreur SET  nom=:nom,prenom=:prenom,cin=:cin,numass=:numass,num=:num,numurg=:numurg,mail=:mail,secteur=:secteur,disponibilite=:disponibilite,nombrelivraison=:nombrelivraison WHERE idl=:idl";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $cin=$livreur->getCin();
        $numass=$livreur->getnumass();
        $num=$livreur->getnum();
        $numurg=$livreur->getnumurg();
        $mail=$livreur->getmail();
        $secteur=$livreur->getsecteur();
        $disponibilite=$livreur->getdisponibilite();
        $nombrelivraison=$livreur->getnombrelivraison();

		$datas = array(':idl'=>$idl,':nom'=>$nom,':prenom'=>$prenom,':cin'=>$cin, ':numass'=>$numass,':num'=>$num,':numurg'=>$numurg,':mail'=>$mail,':secteur'=>$secteur,':disponibilite'=>$disponibilite,':nombrelivraison'=>$nombrelivraison );
		
		$req->bindValue(':idl',$idl);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':numass',$numass);
		$req->bindValue(':num',$num);
		$req->bindValue(':numurg',$numurg);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':secteur',$secteur);
		$req->bindValue(':disponibilite',$disponibilite);
		$req->bindValue(':nombrelivraison',$nombrelivraison);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivreur($idl){
		$sql="SELECT * from livreur where idl=$idl";
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