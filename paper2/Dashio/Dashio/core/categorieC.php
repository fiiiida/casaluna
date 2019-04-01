<?PHP
include "../config.php";
class CategorieC {
function afficherCategorie ($categorie){
		echo "lebelle : ".$categorie->getLeb_cat1()."<br>";
		echo "id: ".$categorie->getId_cat()."<br>";
	}
	function ajouterCategorie($categorie){
		$sql="insert into categorie_parent (leb_cat1,id_cat) values (:leb_cat1, :id_cat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $leb_cat1=$categorie->getLeb_cat1();
        $id_cat=$categorie->getId_cat();
		$req->bindValue(':leb_cat1',$leb_cat1);
		$req->bindValue(':id_cat',$id_cat);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategories(){
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
	function supprimerCategories($id_cat){
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
	function modifierCategorie($categorie,$idc){
		$sql="UPDATE categorie_parent SET leb_cat1=:leb_cat1, id_cat=:id_cat  WHERE idc=:idc";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_cat=$categorie->getId_cat();
        $leb_cat1=$categorie->getLeb_cat1();
		$datas = array(':idc'=>$idc,':leb_cat1'=>$leb_cat1,':id_cat'=>$id_cat );
		
		$req->bindValue(':idc',$idc);
		$req->bindValue(':leb_cat1',$leb_cat1);
		$req->bindValue(':id_cat',$id_cat);
		

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategorie($idc){
		$sql="SELECT * from categorie_parent where idc=$idc";
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