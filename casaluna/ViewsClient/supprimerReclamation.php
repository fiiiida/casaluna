<?PHP
include "../core/reclamationC.php";
include"../config.php";
$reclamationC=new reclamationC();
if (isset($_POST["numReclamation"])){
	$reclamationC->supprimerReclamation($_POST["numReclamation"]);
	header('Location: reclamation.php');
}

?>