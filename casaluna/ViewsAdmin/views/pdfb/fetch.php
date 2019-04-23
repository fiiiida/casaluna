<?php

//fetch.php

include('database_connection.php');

$column = array('idp', 'lib_prod', 'id', 'prix', 'qte_prod' , 'image' ,'description');

$query = "SELECT * FROM produit ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE idp LIKE "%'.$_POST['search']['value'].'%" 
 OR lib_prod LIKE "%'.$_POST['search']['value'].'%" 
 OR id LIKE "%'.$_POST['search']['value'].'%" 
 OR prix LIKE "%'.$_POST['search']['value'].'%" 
 OR qte_prod LIKE "%'.$_POST['search']['value'].'%" 
 OR image LIKE "%'.$_POST['search']['value'].'%" 
 OR description LIKE "%'.$_POST['search']['value'].'%"
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY prix DESC ';
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
 $sub_array[] = $row['idp'];
 $sub_array[] = $row['lib_prod'];
 $sub_array[] = $row['id'];
 $sub_array[] = $row['prix'];
 $sub_array[] = $row['qte_prod'];
 $sub_array[] = $row['image'];
 $sub_array[] = $row['description'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM produit";
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