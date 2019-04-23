<?PHP
include "../core/clientC.php";
$clientC=new ClientC();
if (isset($_POST["cin"])){
	$clientC->supprimerClient($_POST["cin"]);
	header('Location: afficherClient.php');
}

?>