<?PHP
include "../../entities/produit.php";
include "../../core/produitC.php";
include "../../config.php";
if (isset($_POST['lib_prod']) and isset($_POST['id']) and isset($_POST['prix']) and isset($_POST['qte_prod']) and isset($_POST['image']) and isset($_POST['description']) ){

$produit1=new produit($_POST['idp'],$_POST['lib_prod'],$_POST['id'],$_POST['prix'],$_POST['qte_prod'],$_POST['image'],$_POST['description']);

$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);

ini_set('smtp_port', 587);
     $header="MIME-Version: 1.0\r\n";
 $header.='From:"casaluna.tn"<casaluna.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message="Cher Client, \n Un Nouveau Produit Est Disponnible Dans Notre Site Web Et Dans Notre Boutique";
 mail("benmoussaamin25@gmail.com", "Nouveau Produit Aman !", $message, $header); 
header('Location: afficherProduit.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>