<?PHP
include "../../core/livraisonC.php";
include "../../config.php";
$livraison=new LivraisonC();
if (isset($_POST["numcom"])){
	$livraison->supprimerlivraison($_POST["numcom"]);
	header('Location: afficherLivraison.php');
}

?>