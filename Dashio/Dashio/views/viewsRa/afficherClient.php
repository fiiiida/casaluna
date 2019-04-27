<?PHP
include "../core/clientC.php";
$client1C=new client();
$listeClients=$client1C->afficherclient();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>sexe</td>
<td>email</td>
<td>date_naissance</td>
<td>tel_portable</td>
<td>adresse</td>
<td>code_postal</td>
<td>password</td>
<td>image</td>
<td>etat</td>
</tr>

<?PHP
foreach($list as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['sexe']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['date_naissance']; ?></td>
	<td><?PHP echo $row['tel_portable']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['code_postal']; ?></td>
	<td><?PHP echo $row['password']; ?></td>
	<td><?PHP echo $row['image']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>

	<td><form method="POST" action="supprimerClient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierClient.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


