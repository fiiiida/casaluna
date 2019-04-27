<?PHP
include "../entities/suggestionP.php";
include "../core/suggestionPC.php";
include "../config.php";
session_start ();
if (isset($_POST['sujet']) and isset($_POST['commentaire'])){
$suggestionP1=new suggestionP(0,$_SESSION['l'],$_POST['date'],$_POST['sujet'],$_POST['commentaire']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$suggestionP1C=new suggestionPC();
$suggestionP1C->ajouterSuggestionP($suggestionP1);
header('Location:suggestionP.php');
	
}else{
	echo "véréfier les champs";
}
//*/

?>