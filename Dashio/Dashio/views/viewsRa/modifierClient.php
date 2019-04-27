<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (isset($_GET['cin'])){
	$clientC=new clientC();
    $result=$clientC->recupererClient($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$sexe=$row['sexe'];
		$email=$row['email'];
		$date_naissance=$row['date_naissance'];
		$tel_portable=$row['tel_portable'];
		$adresse=$row['adresse'];
		$code_postal=$row['code_postal'];
		$password=$row['password'];
		$image=$row['image'];
		$etat=$row['etat'];
?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
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
<td>sexe</td>
<td><input type="text" name="sexe" value="<?PHP echo $sexe ?>"></td>
</tr>
<tr>
<td>email</td>
<td><input type="email" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>date_naissance</td>
<td><input type="date" name="date_naissance" value="<?PHP echo $date_naissance ?>"></td>
</tr>
<tr>
<td>tel_portable</td>
<td><input type="number" name="tel_portable" value="<?PHP echo $tel_portable ?>"></td>
</tr>
<tr>
<td>adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>code_postal</td>
<td><input type="number" name="code_postal" value="<?PHP echo $code_postal ?>"></td>
</tr>
<tr>
<td>password</td>
<td><input type="number" name="password" value="<?PHP echo $password ?>"></td>
</tr>
<tr>
<td>image</td>
<td><input type="image" name="image" value="<?PHP echo $image ?>"></td>
</tr>
<tr>
<td>etat</td>
<td><input type="number" name="etat" value="<?PHP echo $etat ?>"></td>
</tr>
<tr>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$employe=new employe($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['email'],$_POST['date_naissance'],$_POST['tel_portable'],$_POST['adresse'],$_POST['code_postal'],$_POST['password'],$_POST['image'],$_POST['etat']);
	$employeC->modifierClient($client,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherClient.php');
}
?>
</body>
</HTMl>