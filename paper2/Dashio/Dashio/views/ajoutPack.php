<?PHP
include "../entities/pack.php";
include "../core/packC.php";

if (isset($_POST['Referencepa']) and isset($_POST['Nomp']) and isset($_POST['Contenu']) and isset($_POST['Prixp'])and isset($_POST['Pourcp']) ){
	
$packs1=new packs($_POST['id_pack'],$_POST['Referencepa'],$_POST['Nomp'],$_POST['Contenu'],$_POST['Prixp'],$_POST['Pourcp']);

$packs1C=new PacksC();
$packs1C->ajouterPacks($packs1);
header('Location: afficherPack.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>