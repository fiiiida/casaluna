<?PHP
include "../core/ProduitC.php";
$produitC=new ProduitC();
if (isset($_POST["id_prod"])){
	$produitC->supprimerProduits($_POST["id_prod"]);
	header('Location: afficherProduit.php');
}

?>