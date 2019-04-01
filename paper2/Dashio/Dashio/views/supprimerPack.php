
<?PHP
include "../core/packC.php";
$packC=new PacksC();
if (isset($_POST["Referencepa"])){
	$packC->supprimerPacks($_POST["Referencepa"]);
  header('Location: afficherPack.php');
	
}	
?>






