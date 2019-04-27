<HTML>
<head>
</head>
<body>
<?PHP

include "../core/service_client.php";
if (isset($_GET['ID'])){
	$ser=new service_client();
    $result=$ser->recuperer($_GET['ID']);
	foreach($result as $row){
		$ID=$row['ID'];
		$identifiant=$row['identifiant'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$age=$row['age'];
		$sexe=$row['sexe'];
		$adresse=$row['adresse'];
		$email=$row['email'];
		$mdp=$row['mdp'];
		$fidelite=$row['fidelite'];
?>
<form method="POST">
<table>
<caption>Modifier Client</caption>
<tr>
<td><input type="hidden" name="ID" value="<?PHP echo $ID ?>"></td>
</tr>
<tr>
<td>Identifiant</td>
<td><input type="number" name="identifiant" value="<?PHP echo $identifiant ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Age </td>
<td><input type="number" name="age" value="<?PHP echo $age ?>"></td>
</tr>
<tr>
<td>Sexe</td>
<td><input type="text" name="sexe" value="<?PHP echo $sexe ?>"></td>
</tr>
<tr>
<td>Email </td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>Adresse </td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>Mot de passe </td>
<td><input type="number" name="mdp" value="<?PHP echo $mdp ?>"></td>
</tr>
<tr>
<td>Fidelite</td>
<td><input type="text" name="fidelite" value="<?PHP echo $fidelite ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="ID_ini" value="<?PHP echo $_GET['ID'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['Modifier'])){
	$cli=new client($_POST['ID'],$_POST['identifiant'],$_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['adresse'],$_POST['email'],$_POST['mdp'],$_POST['fidelite']);
	$ser->modifier($cli,$_POST['ID_ini']);
	echo $_POST['ID_ini'];
	
}
?>
</body>
</HTMl>