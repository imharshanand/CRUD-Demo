<?php 

	$connection = mysqli_connect("localhost","id13599490_cruddb","2og5NT]s5dS\+q1s","id13599490_crud");	
	$result = array();
	$result['data'] = array();
	$select= "SELECT *from data";
	$responce = mysqli_query($connection,$select);

	while($row = mysqli_fetch_array($responce))
		{
			$index['id']      = $row['0'];
			$index['name']    = $row['1'];
			$index['email']   = $row['2'];
			$index['contact'] = $row['3'];
			$index['address'] = $row['4'];
			
			array_push($result['data'], $index);
		}
			
			$result["success"]="1";
			echo json_encode($result);
			mysqli_close($connection);
 ?>