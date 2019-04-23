<?PHP
include "../../core/produitC.php";
include "../../config.php";
$Produuit1C=new ProduitC();
	$listeproduit=$Produit1C->trierProduit();
?>
<table class="table table-bordered">
<tr>
<td>lib prod</td>
<td>id prod</td>
<td>id</td>
<td>prix</td>
<td>quantite prod</td>
<td>image</td>
<td>description</td>

</tr>

<?PHP
foreach($listeproduit as $row){
	?>
	<tr>
	<td><?PHP echo $row['lib_prod']; ?></td>
	<td><?PHP echo $row['id_prod']; ?></td>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
    <td><?PHP echo $row['qte_prod']; ?> </td>
	<td><?PHP echo $row['image']; ?></td>
    <td><?PHP echo $row['description']; ?> </td>
	
	</tr>