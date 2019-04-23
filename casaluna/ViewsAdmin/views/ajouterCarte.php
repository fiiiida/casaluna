<?PHP
include "../core/service_carteF.php";
if (isset($_POST['identifiant']))
{
$carte1= new carte($_POST['identifiant'],$_POST['num'],$_POST['pts']);
//Partie2

//var_dump($client1);


//Partie3
$ser=new service_carteF();
$ser->ajouter($carte1);

	
}else{
	echo "vérifier les champs";
}


?>
