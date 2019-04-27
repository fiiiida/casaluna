<?PHP
include "../../core/livreurL.php";
include "../../config.php";
$livreurL=new LivreurL();
if (isset($_POST["cin"])){
	$livreurL->supprimerlivreur($_POST["cin"]);
	header('Location: afficherlivreur.php');
}

?>