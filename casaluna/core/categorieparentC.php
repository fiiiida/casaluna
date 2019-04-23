<?PHP
include "../config.php";
class categorieparentC {
function afficherCategorieparent ($categorieparent){
		echo "leb_cat1: ".$categorieparent->getLeb_cat1()."<br>";
		echo "id_cat: ".$categorieparent->getId_cat()."<br>";
	}
	function ajouterCategorieparent($categorieparent){
		$sql="insert into categorie_parent (leb_cat1,id_cat) values (:leb_cat1, :id_cat,)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $leb_cat1=$categorieparent->getLeb_cat1();
        $id_cat=$categorieparent->getId_cat();
		$req->bindValue(':leb_cat1',$leb_cat1);
		$req->bindValue(':id_cat',$id_cat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategorieparents(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie_parent";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategorieparent($id_cat){
		$sql="DELETE FROM categorie_parent where id_cat= :id_cat";
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
	function modifierCategorieparent($categorieparent,$id_cat){
		$sql="UPDATE categorie_parent SET id_cat=:id_catt, leb_cat1=:leb_cat1 WHERE id_cat=:id_cat";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_cat=$categorieparent->getId_cat();
        $leb_cat1=$categorieparent->getLeb_cat1();

		$datas = array(':id_cat'=>$id_cat, ':leb_cat1'=>$leb_cat1);
		$req->bindValue(':id_cat',$id_cat);
		$req->bindValue(':leb_cat1',$leb_cat1);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategorieparent($id_cat){
		$sql="SELECT * from categorie_parent where id_cat=$id_cat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherCategorieparent($leb_cat1){
		$sql="SELECT * from categorie_parent where leb_cat1=$leb_cat1";
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