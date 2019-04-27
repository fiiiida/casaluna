
<?PHP
include "../core/promotionC.php";
$promotionC=new PromotionC();
if (isset($_POST["Referencep"])){
	$promotionC->supprimerPromotions($_POST["Referencep"]);
  header('Location: afficherPromotion.php');
	
}	
?>






