<?PHP
include "../entities/event.php";
include "../core/eventC.php";

if (isset($_POST['nome']) and isset($_POST['lieu']) and isset($_POST['dateexpo'])){
	
$event1=new event($_POST['id_event'],$_POST['nome'],$_POST['lieu'],$_POST['dateexpo']);

$event1C=new EventC();
$event1C->ajouterEvent($event1);
header('Location: afficherEvent.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>