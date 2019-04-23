<?PHP
include "../core/suggestionPC.php";
include"../config.php";
$suggestionPC=new suggestionPC();
if (isset($_POST["num"]))
{
	
	$suggestionPC->supprimerSuggestionP($_POST["num"]);
	header('Location:suggestionP.php');
}

?>