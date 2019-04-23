
<?PHP
include "../core/eventC.php";
include "../config.php";
session_start ();
$promotionC=new EventC();
if (isset($_POST["id_event"])){
	$promotionC->ajouterParticipants($_POST["id_event"],$_SESSION['l']);
	header('Location:../evenement.php');
}	
?>



