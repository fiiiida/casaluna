<?PHP
include "../entities/carte.php";
include "../core/carteC.php";

if (isset($_POST['numcarte']) and isset($_POST['pts']) and isset($_POST['id_carte'])) {
$carte1=new carte($_POST['idca'],$_POST['numcarte'],$_POST['pts'],$_POST['id_carte']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$carte1C=new CarteC();
$carte1C->ajouterCarte($carte1);
ini_set('smtp_port', 587);
     $header="MIME-Version: 1.0\r\n";
 $header.='From:"casaluna.tn"<casaluna.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message="Cher Client, \n Un Nouveau Produit Est Disponnible Dans Notre Site Web Et Dans Notre Boutique";
 mail("benmoussaamin25@gmail.com", "nouvelle Carte !", $message, $header); 
header('Location: afficherCarte.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>