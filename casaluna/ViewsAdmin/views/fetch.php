<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "casaluna");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM reclamation 
  WHERE date LIKE '%".$search."%'
  OR numReclamation LIKE '%".$search."%' 

 ";
}
else
{
 $query = "
  SELECT * FROM reclamation ORDER BY   idUtilisateurr
 ";
}
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
 $output .= '

<div class="col-md-12">
<div class="content-panel">
<h4><i class="fa fa-angle-right"></i>Liste des Reclamations:</h4>
<hr>
<table class="table">
    <thead>
<tr>
<th>idUtilisateurr</th>
<th>sujetReclamation</th>
<th>commentaireReclamation</th>
<th>date</th>




</tr>
</thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["idUtilisateurr"].'</td>
    <td>'.$row["sujetReclamation"].'</td>
    <td>'.$row["commentaireReclamation"].'</td>
    <td>'.$row["date"].'</td>
   
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>