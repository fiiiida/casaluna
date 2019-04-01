
<?PHP
include "../core/eventC.php";
$promotionC=new EventC();
if (isset($_POST["nome"])){
	$promotionC->supprimerEvents($_POST["nome"]);
	header('Location: afficherEvent.php');
}	
?>



