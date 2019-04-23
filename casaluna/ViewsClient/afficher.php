


<?php
include "../core/service_client.php";

$crud= new service_client();


echo"<table border=1>";
echo" <tr>";
echo" <td> Identifiant </td>";
echo" <td> Nom </td>";
echo "<td> Prenom </td>";
echo "<td> age </td>";
echo "<td> sexe </td>";
echo "<td> adresse </td>";
echo "<td> email </td>";
echo "<td> mdp </td>";
echo "<td> fidelite </td>";
echo "</tr>";
$res=$crud->afficherClient();
foreach ($res as $row)
{
    echo "<tr>";
    //echo "<td>".$row['identifiant']."</td>";
    echo "<td>".$row['nom']."</td>";
    echo "<td>".$row['prenom']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['sexe']."</td>";
    echo "<td>".$row['adresse']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['mdp']."</td>";
    echo "<td>".$row['fidelite']."</td>";
    echo '<td><a href="modifier.php?identifiant='.$row['identifiant'].'">Modifier</a></td>';
    echo '<td><a href="supprimer.php?identifiant='.$row['identifiant'].'">supprimer</a></td>';
    echo "</tr>";
}
?>