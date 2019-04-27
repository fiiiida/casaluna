<?php

//fetch.php

include('database_connection.php');

$column = array('nom', 'prenom', 'identifiant', 'age', 'sexe' , 'email' ,'fidelite', 'adresse');

$query = "SELECT * FROM client ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE nom LIKE "%'.$_POST['search']['value'].'%" 
 OR prenom LIKE "%'.$_POST['search']['value'].'%" 
 OR identifiant LIKE "%'.$_POST['search']['value'].'%" 
 OR age LIKE "%'.$_POST['search']['value'].'%" 
 OR sexe LIKE "%'.$_POST['search']['value'].'%" 
 OR email LIKE "%'.$_POST['search']['value'].'%" 
 OR fidelite LIKE "%'.$_POST['search']['value'].'%"
 OR adresse LIKE "%'.$_POST['search']['value'].'%" 
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
 $sub_array[] = $row['nom'];
 $sub_array[] = $row['prenom'];
 $sub_array[] = $row['identifiant'];
 $sub_array[] = $row['age'];
 $sub_array[] = $row['sexe'];
 $sub_array[] = $row['email'];
 $sub_array[] = $row['fidelite'];
 $sub_array[] = $row['adresse'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM client";
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