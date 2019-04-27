<?PHP
include "../../entities/categorie.php";
include "../../core/categorieC.php";
include "../../config.php";

if (isset($_POST['leb_cat']) and isset($_POST['parent']) ){
$categorie1=new categorie($_POST['id_cat'],$_POST['leb_cat'],$_POST['parent']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$categorie1C=new CategorieC();
$categorie1C->ajouterCategorie($categorie1);
header('Location: afficherCategorie.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>