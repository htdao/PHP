<?php 
	require_once('model.php');
	class User extends Model{
		var $table = 'users';

		function newUser(){
			$query = "SELECT * FROM users ORDER BY id DESC LIMIT 4";

		    $users = array();
		    
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$users[] = $row;
		    }
		    return $users;
		}

	}
 ?>