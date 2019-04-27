<?PHP
include "../../core/service_client.php";
include "../../config.php";
$crud=new service_client();

if (isset($_POST["nom"])){
	$crud->supprimer($_POST["nom"]);
	header('Location: afficherclient.php');

}

?>
