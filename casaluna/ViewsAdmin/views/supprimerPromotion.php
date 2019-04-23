
<?PHP
include "../../core/promotionC.php";

include "../../config.php";
$promotionC=new PromotionC();
if (isset($_POST["id_promotion"])){
	$promotionC->supprimerPromotions($_POST["id_promotion"]);
  header('Location: afficherPromotion.php');
	
}	
?>






