<?PHP
include "../entities/client.php";
include "../core/clientC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['sexe']) and isset($_POST['email']) and isset($_POST['date_naissance']) and isset($_POST['tel_portable']) and isset($_POST['adresse']) and isset($_POST['code_postal']) and isset($_POST['password']) and isset($_POST['image']) and isset($_POST['etat'])){
$client1=new employe($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['email']),$_POST['date_naissance']),$_POST['tel_portable']),$_POST['adresse']),$_POST['code_postal']),$_POST['password']),$_POST['image']),$_POST['etat']));
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$client1C=new EmployeC();
$client1C->ajouterEmploye($client1);
header('Location: afficherClient.php');
}else{
	echo "vérifier les champs";
}
//*/

?>