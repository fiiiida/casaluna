<?PHP
include "../core/couponC.php";
$couponC=new couponC();
if (isset($_POST["id"])){
	$couponC->supprimercoupon($_POST["id"]);
	header('Location: afficherCoupon.php');
}

?>