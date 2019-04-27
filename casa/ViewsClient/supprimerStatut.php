
<?PHP
include "../core/eventC.php";
include "../config.php";
session_start ();
$promotionC=new EventC();
if (isset($_POST["idevent"])){
	$promotionC->supprimerEventsStatut($_POST["idevent"],$_SESSION['l']);
	header('Location: ../statutEvent.php');
}	
?>



