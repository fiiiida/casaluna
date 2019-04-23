<?PHP
include "../../entities/promotion.php";
include "../../core/promotionC.php";
include "../../config.php";
if (isset($_POST['Referencep']) and isset($_POST['Pourcentage']) and isset($_POST['Categoriesp']) and isset($_POST['Debutpromos'])and isset($_POST['Finpromos']) ){

	
$promotion1=new promotion($_POST['id_promotion'],$_POST['Referencep'],$_POST['Pourcentage'],$_POST['Categoriesp'],$_POST['Debutpromos'],$_POST['Finpromos']);

$promotion1C=new PromotionC();
$promotion1C->ajouterPromotion($promotion1);
header('Location: afficherPromotion.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>