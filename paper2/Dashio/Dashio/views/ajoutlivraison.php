<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

function verifier($tableau){
	foreach ($tableau as $key => $value) {
		if(!isset($_POST[$value])){
			return false;
		}
	}
	return true;
}
if(verifier(['numcom','nomclient' ,'prenomc' ,'numclient' ,'numadress' ,'nomrue' ,'nomville','nomgouv','prixlivraison','prixcomm' ,'prixtotal','cinlivreur','datelivraison'])){

$livraison1=new livraison($_POST['id_liv'],$_POST['numcom'],$_POST['nomclient'],$_POST['prenomc'],$_POST['numclient'],$_POST['numadress'],$_POST['nomrue'],$_POST['nomville'],$_POST['nomgouv'],$_POST['prixlivraison'],$_POST['prixcomm'],$_POST['prixtotal'],$_POST['cinlivreur'],$_POST['datelivraison']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);
header('Location: afficherLivraison.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>