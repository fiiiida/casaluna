<?PHP
include "../core/avisC.php";
$avisC=new avisC();
include "../config.php";
if (isset($_POST["num"])){
	$avisC->supprimerAvis($_POST["num"]);
	header('Location: avis.php');
}

?>