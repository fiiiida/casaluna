<?PHP
include "../core/suggestionC.php";
include"../config.php";
$suggestionC=new suggestionC();
if (isset($_POST["numSuggestion"])){
	$suggestionC->supprimerSuggestion($_POST["numSuggestion"]);
	header('Location:suggestion.php');
}

?>