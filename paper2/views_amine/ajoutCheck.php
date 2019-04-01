<?PHP
include "../entities/check.php";
include "../core/checkC.php";

if ( isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['address1'])and isset($_POST['country']) and isset($_POST['zip']) and isset($_POST['email']) and isset($_POST['mobile'])){
$check1=new check ($_POST['id'],'::1',$_POST['firstname'],$_POST['lastname'],$_POST['adress1'],$_POST['country'],$_POST['zip'],$_POST['email'],$_POST['mobile']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$check1C=new checkC();
$check1C->ajoutercheck($check1);
header('Location: checkout.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>