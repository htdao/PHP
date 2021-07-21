<?php 
	require_once( __DIR__ . '/Connection.php');
	$id = isset($_GET['id'])?$_GET['id']:null;
	$data = null;
	$conn = new Connection();
	if ($id) {
		$query = 'select * from categories where id = '.$id;
		$data = $conn->connection->query($query);
		$data = $data->fetch_assoc();
	}

	echo json_encode($data);

 ?>