
<?php 
	require_once('model.php');
	class Category extends Model{
		var $table = 'categories';

		function parents(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM categories WHERE parent_id is NULL";

		    $categories = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$categories[] = $row;
		    }

		    return $categories;
		}

		function newCate(){
			$query = "SELECT * FROM categories ORDER BY id DESC LIMIT 4";

		    $categories = array();
		    
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$categories[] = $row;
		    }
		    return $categories;
		}

		function fileCate(){
			$query = "SELECT * FROM categories ORDER BY id DESC LIMIT 5";
		    $filePost = array();
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$filePost[] = $row;
		    }
			 return $filePost;
		}
	}
 ?>