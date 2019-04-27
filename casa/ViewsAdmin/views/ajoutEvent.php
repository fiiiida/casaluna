<?PHP
include "../../entities/event.php";
include "../../core/eventC.php";
include "../../config.php";

if (isset($_POST['nome']) and isset($_POST['lieu']) and isset($_POST['img_event']) and isset($_POST['dateexpo'])){
	
$event1=new event($_POST['id_event'],$_POST['nome'],$_POST['lieu'],$_POST['img_event'],$_POST['dateexpo']);

$event1C=new EventC();
$event1C->ajouterEvent($event1);

ini_set('smtp_port', 587);
     $header="MIME-Version: 1.0\r\n";
 $header.='From:"casaluna.tn"<casaluna.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message="Cher Client, \n Un Nouveau expo Est Disponnible Dans Notre Site Web Et Dans Notre Boutique";
 mail("benmoussaamin25@gmail.com", "Nouveau Expo !", $message, $header); 

header('Location: afficherEvent.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>