<?PHP
include "../../core/carteC.php";
include "../../config.php";
$carteC=new CarteC();
if (isset($_POST["numcarte"])){
	$carteC->supprimerCarte($_POST["numcarte"]);
	header('Location: afficherCarte.php');
}

?>