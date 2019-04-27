<?PHP
include "../../entities/livreur.php";
include "../../core/livreurL.php";
include "../../config.php";

if  (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['cin']) and isset($_POST['numass']) and isset($_POST['num']) and isset($_POST['numurg']) and isset($_POST['mail']) and isset($_POST['secteur']) and isset($_POST['disponibilite']) and isset($_POST['nombrelivraison'])){


$livreur1=new livreur($_POST['idl'],$_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['numass'],$_POST['num'],$_POST['numurg'],$_POST['mail'],$_POST['secteur'],$_POST['disponibilite'],$_POST['nombrelivraison']);
//Partie2
/*
var_dump($livreur1);
}
*/
//Partie3
$livreur1L=new LivreurL();
$livreur1L->ajouterlivreur($livreur1);
header('Location: afficherlivreur.php');
}else{
	echo "vérifier les champs";
}
//*/

?>