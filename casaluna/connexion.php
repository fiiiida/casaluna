<?PHP
include "entities/client.php";
include "core/clientC.php";

session_start();

if (!empty($_POST) && isset($_POST['login']) && isset($_POST['pwd']))
{

$client1=new client('identifiant',$_POST['login'],'prenom','age','sexe','adresse','email',$_POST['pwd'],'fidelite');

$client1C=new clientC();
$client1C->verifConnexion($client1);

}

?>