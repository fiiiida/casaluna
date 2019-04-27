<?php

//fetch.php

include('database_connection.php');

$column = array('id_liv', 'numcom', 'nomclient', 'prenomc', 'numclient' , 'numadress' , 'nomrue','nomville', 'nomgouv', 'prixlivraison', 'prixcomm', 'prixtotal' , 'cinlivreur' , 'datelivraison');

$query = "SELECT * FROM livraison ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE id_liv LIKE "%'.$_POST['search']['value'].'%" 
 OR numcom LIKE "%'.$_POST['search']['value'].'%" 
 OR nomclient LIKE "%'.$_POST['search']['value'].'%" 
 OR prenomc LIKE "%'.$_POST['search']['value'].'%" 
 OR numclient LIKE "%'.$_POST['search']['value'].'%" 
 OR nomrue LIKE "%'.$_POST['search']['value'].'%" 
 OR nomville LIKE "%'.$_POST['search']['value'].'%"
 OR nomgouv LIKE "%'.$_POST['search']['value'].'%" 
 OR prixlivraison LIKE "%'.$_POST['search']['value'].'%" 
 OR prixcomm LIKE "%'.$_POST['search']['value'].'%" 
 OR prixtotal LIKE "%'.$_POST['search']['value'].'%" 
 OR cinlivreur LIKE "%'.$_POST['search']['value'].'%" 
 OR datelivraison LIKE "%'.$_POST['search']['value'].'%"
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id_prod DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['id_liv'];
 $sub_array[] = $row['numcom'];
 $sub_array[] = $row['nomclient'];
 $sub_array[] = $row['prenomc'];
 $sub_array[] = $row['numclient'];
 $sub_array[] = $row['numadress'];
 $sub_array[] = $row['nomrue'];
 $sub_array[] = $row['nomville'];
 $sub_array[] = $row['nomgouv'];
 $sub_array[] = $row['prixlivraison'];
 $sub_array[] = $row['prixcomm'];
 $sub_array[] = $row['prixtotal'];
 $sub_array[] = $row['cinlivreur'];
 $sub_array[] = $row['datelivraison'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM livraison";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>