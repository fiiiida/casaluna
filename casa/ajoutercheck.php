<?PHP
include "entities/check.php";
include "core/checkC.php";

if ( isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['address1']) and isset($_POST['country']) and isset($_POST['zip'])and isset($_POST['email']) and isset($_POST['phone'])){
$check1=new check('50',$_POST['fname'],$_POST['lname'],$_POST['address1'],$_POST['country'],$_POST['zip'],$_POST['email'],$_POST['phone']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$check1C=new checkC();
$check1C->ajoutercheck($check1);
header('Location: product.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>