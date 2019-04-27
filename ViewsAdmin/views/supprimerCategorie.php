<?PHP
include "../../core/categorieC.php";
include "../../config.php";

$categorieC=new CategorieC();
if (isset($_POST["id_cat"])){
	$categorieC->supprimerCategories($_POST["id_cat"]);
	header('Location: afficherCategorie.php');
}

?>