<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

if (isset($_POST['id_cat']) and isset($_POST['leb_cat1'])){

$categorie1=new categorie($_POST['idc'],$_POST['id_cat'],$_POST['leb_cat1']);

$categorie1C=new CategorieC();
$categorie1C->ajouterCategorie($categorie1);
header('Location: afficherCategorie.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>