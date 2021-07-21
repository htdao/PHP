<?php 
	require_once('connection.php');
	class Model{
		var $table;
		var $connection;

		function __construct(){
			$conn = new Connection();
			$this->connection = $conn->connection;
		}

		function all(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM ".$this->table;

		    $this->table = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$this->table[] = $row;
		    }

		    return $this->table;
		}

		function find($id){
			$query = "SELECT * FROM ".$this->table." WHERE id= ".$id;

			return $this->connection->query($query)->fetch_assoc();

			// return $result->fetch_assoc();
			// 
			// echo $query;
		}

		function create($data){
			$columns = '';
			$values = '';
			foreach ($data as $key => $value) {
				// echo $value;
				if ($value=='NULL') {
					$values .=$value.",";
				}
				else{
					$values .="'".$value."',";	
				}
				$columns .=$key.',';
				// $values .="'".$value."',";
			}
			$columns = trim($columns,',');
			$values = trim($values,',');
			// var_dump($values);
			// die();
			$query = "INSERT INTO ".$this->table." (".$columns.") VALUES (".$values.")";
			return $this->connection->query($query);

			// echo $query;
		}

		function delete($id){
		    $query = "DELETE FROM ".$this->table." WHERE id = ".$id;

		    return $this->connection->query($query);

		    // echo "$query";
		}

		function update($data){
			
			$values = '';
			foreach ($data as $key => $value) {
				$values .=$key."='".$value."',";
			}
			$values = trim($values,',');
			$query = "UPDATE ".$this->table." SET ".$values." WHERE  id = '".$data['id']."'";
		
			return $this->connection->query($query);

			// echo $query;
		}
	}
 ?>