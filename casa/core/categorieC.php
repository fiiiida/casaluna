<?PHP

class CategorieC {
function afficherCategorie ($categorie){
		echo "lebelle : ".$categorie->getLeb_cat()."<br>";
		echo "lebelle : ".$categorie->getParent()."<br>";
	}
	function ajouterCategorie($categorie){
		$sql="insert into categorie (leb_cat1,parent) values (:leb_cat, :parent)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $leb_cat=$categorie->getLeb_cat();
        $parent=$categorie->getParent();
		$req->bindValue(':leb_cat1',$leb_cat1);
		$req->bindValue(':id_cat',$id_cat);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategorieDecos(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categories where parent='decos' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    function afficherCategorieAcces(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categories where parent='Accessoires' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategories($id_cat){
		$sql="DELETE FROM categories where id_cat= :id_cat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_cat',$id_cat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCategorie($categorie,$id_cat){
		$sql="UPDATE categories SET leb_cat=:leb_cat ,parent=:parent WHERE id_cat=:id_cat";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $leb_cat=$categorie->getLeb_cat();
        $parent=$categorie->getParent();
		$datas = array(':id_cat'=>$id_cat, ':leb_cat'=>$leb_cat, ':parent'=>$parent);
		$req->bindValue(':id_cat',$id_cat);
		$req->bindValue(':leb_cat',$leb_cat);
        $req->bindValue(':parent',$parent);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategorie($id_cat){
		$sql="SELECT * from categories where id_cat='$id_cat'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficherCategories(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categories  ";
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