<?PHP
include "../entities/coupon.php";
include "../core/couponC.php";

if ( isset($_POST['code']) and isset($_POST['climit']) and isset($_POST['cdiscount'])){
$coupon1=new coupon($_POST['id'],$_POST['code'],'0',$_POST['climit'],$_POST['cdiscount']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$coupon1C=new couponC();
$coupon1C->ajoutercoupon($coupon1);
header('Location: afficherCoupon.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>