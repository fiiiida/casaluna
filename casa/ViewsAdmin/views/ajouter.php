<?PHP
include "../../core/service_client.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['age']) and isset($_POST['sexe']) and isset($_POST['adresse']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['fidelite']))
{
$client1= new client($_POST['ID'],$_POST['identifiant'],$_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['adresse'],$_POST['email'],$_POST['mdp'],$_POST['fidelite']);
//Partie2

//var_dump($client1);


//Partie3
$ser=new service_client();
$ser->ajouter($client1);

	
}else{
	echo "vérifier les champs";
}


?>
