<?php
$connect = mysqli_connect("localhost", "root", "", "ghassen");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM usersmeta 
	WHERE firstname LIKE '%".$search."%'
	OR lastname LIKE '%".$search."%' 
	OR address1 LIKE '%".$search."%' 
	OR city LIKE '%".$search."%' 
	OR zip LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM usersmeta  ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							 <th>firstname</th>
  <th>lastname</th>
  <th>adress</th>
  <th>city</th>
  <th>zip</th>
  <th>mobile</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["firstname"].'</td>
				<td>'.$row["lastname"].'</td>
				<td>'.$row["address1"].'</td>
				<td>'.$row["city"].'</td>
				<td>'.$row["zip"].'</td>
				<td>'.$row["mobile"].'</td>
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